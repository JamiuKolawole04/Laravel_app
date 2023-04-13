<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * GET - Request a resource
 * POST - Create a resource
 * PUT - update a resource
 * PATCH - Modify a resource
 * DELETE - Delete a resource
 * OPTIONS - Ask the server which verb is allowed
 * 
 */

Route::get('/', function () {
    Debugbar::addMessage("INFO!");

    // try {

    //     throw new Exception("Try message");
    // } catch(Exception $e) {
    //     Debugbar::addException($e);
    // }

    $name = "Code with Bhary";
    
    return view('welcome', [
        "name" => $name,
    ]);
});

// Route::get("/blog", [PostsController::class, "index"]);
Route::resource("blog", PostsController::class);

// caaling theinvol with a route
Route::get("/involke", HomeController::class);