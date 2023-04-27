<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Laravel convert Post to posts (will pluralize it ) and serach for it in the dataase 
class Post extends Model
{
    use HasFactory;

    // protected $table = "posts";
    
    // when using title as proimary key..The default key is the id in the migration file 
    // protected $primaryKey = "title"; 

    // disabling time stamps
    // protected $timestamps = false;

    // using different driver
    // protected $connection = "sqlite";

    // protected $attributes = [
    //     "is_published" => true
    // ];
    
    protected $fillable = [
        "title", "excerpt", "body", "image_path", "min_to_read", "is_published"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}