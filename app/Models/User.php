<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 4:12pm 11-24-2020
    // One to Many Relationship
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // ONE TO MANY
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Get all the likes accumalated by the current user post.
     */
    public function receivedLikes()
    {
        return $this->hasManyThrough(Like::class, Post::class);
    }
}
