<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // many to many relationship which belongs to Post model
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}