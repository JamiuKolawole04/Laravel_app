<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Laravel convert Post to posts (will pluralize it ) and serach for it in the dataase 
class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
}