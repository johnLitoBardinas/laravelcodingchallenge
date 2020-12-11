<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        // $posts = Post::get(); // ModelCollection
        // $posts = Post::paginate(20); // LengthAwarePagination
        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(20); // LengthAwarePagination + Eager Loading technique

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post, Request $request)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
