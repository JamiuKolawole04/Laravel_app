<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    // involking a signle route
    public function __invoke() 
    {
        return view("fallback.index");
    }
}