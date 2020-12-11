<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body'
    ];

    // Attaching Post of user must be on User Model

    // 5:16pm 11-24-2020 (ONE TO MANY (inverse))
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 8:58pm 11-24-2020 (ONE TO MANY)
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Determine if the user already liked the specified post.
     * All Business Logic resired here.
     */
    public function likedBy(User $user)
    {
        /**
         * 9:26pm 11-24-2020
         * likes => return the DB Eloquent result
         * likes() => return just the Model eloquent query ready to be chain. ex ->create()
         */
        return $this->likes->contains('user_id', $user->id);
    }
}
