<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the user allow to destroy the resource.
     */
    public function delete(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
