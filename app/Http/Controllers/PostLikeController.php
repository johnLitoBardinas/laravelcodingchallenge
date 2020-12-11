<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Post $post, Request $request)
    {
        // 12:17am 11-25-2020
        // dd($post->likes()->withTrashed()->get());
        // dd($post->likes);

        if ($post->likedBy($request->user())) {
            return response(null, 409); // conflicts
        }

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        // Only send email to the user who do not previously liked this specific post.
        if (!$post->likes()->onlyTrashed()->where('user_id', $request->user()->id)->count()) {
            Mail::to($post->user)->send(new PostLiked($request->user(), $post));
        }

        return back();
    }

    public function destroy(Post $post, Request $request)
    {
        $request->user()->likes()->where('post_id', $post->id)->delete();
        return back();
    }
}
