@props(['post' => $post])

<div class="mb-4">
    <a href="{{ route('users.posts', $post->user) }}" class="font-bold">
        {{ $post->user->username }}
    </a>
    <span class="text-gray-600">
        {{ $post->created_at->diffForHumans() }}
    </span>
    <p class="mb-w">{{ $post->body }}</p>

    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Delete</button>
        </form>
    @endcan

    <div class="flex items-center">
        @auth
            @if (! $post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" class="mr-1" method="POST">
                    @csrf
                    <button type="submit" class="text-blue-500">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" class="mr-1" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="text-blue-500">Unlike</button>
                </form>
            @endif
        @endauth
        &nbsp;
        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->isEmpty() ? 1 : $post->likes->count() ) }}</span>
    </div>
</div>