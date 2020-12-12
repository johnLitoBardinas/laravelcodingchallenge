<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // One to Many.
    public function employees()
    {
        $this->hasMany(Employee::class);
    }
}
