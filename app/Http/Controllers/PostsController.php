<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() 
    {
        return "this is the index() method inside the Posts Controller";
    }
}