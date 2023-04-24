<?php

use App\Http\Controllers\FallbackController;
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

// GET Requests
// Route::resource("blog", PostsController::class);
Route::get("/blog", [PostsController::class, "index"]);
Route::get("/index", [PostsController::class, "default"]);
Route::get("/indexTwo", [PostsController::class, "defaultTwo"]);
Route::get("/blog2", [PostsController::class, "indexTwo"])->name("blog2");
Route::get("/article/{id?}", [PostsController::class, "show"]);
// adding regular expression only to route id and makng sure it's an integer
Route::get("/blog/{id}", [PostsController::class, "show"])->where("id", "[0-9]+")->name("blogWithId");
Route::get("/create", [PostsController::class, "create"]);
Route::post("/store", [PostsController::class, "store"]);
Route::get("/edit/{id}", [PostsController::class, "edit"])->name("edit")->whereNumber("id");
Route::patch("/update/{id}", [PostsController::class, "update"])->name("update");
Route::delete("/delete/{id}", [PostsController::class, "destroy"])->name("delete");




// checking number with whereNumber
Route::get("/blog/number/{id}", [PostsController::class, "show"])->whereNumber("id");
// adding regular expression only to route id and makng sure it's a string or they are strings
Route::get("/blogTwo/{name}", [PostsController::class, "show"])->where("name", "[A-Za-z]+");

// checking alphabet with where alpha
Route::get("/blogTwo/{name}", [PostsController::class, "show"])->whereAlpha("name");

// check whether id is number and name is alphabet with where statement
Route::get("/blogThree/{id}/{name}", [PostsController::class, "show"])
    ->where([
        "id" => "[0-9]+",
        "name" => "[A-Za-z]+"
    ]);

// check whether id is number and name is alphabet with where statement

Route::get("/blogThree/{id}/{name}", [PostsController::class, "show"])
   ->whereNumber("id")
   ->whereAlpha("name");

    

// POST Requests
Route::post("/blog/create", [PostsController::class, "create"]);
Route::post("/blog/{id}", [PostsController::class, "store"]);

// PUT or PATCHR equests
Route::put("/blog/{id}", [PostsController::class, "edit"]);
Route::patch("/blog/{id}", [PostsController::class, "update"]);

// DELETE Requests
Route::delete("/blog/{id}", [PostsController::class, "destroy"]);

// prefixed route
Route::prefix("/second")->group(function () {
     Route::get("/", [PostsController::class, "indexTwo"]);
    Route::get("/user", [PostsController::class, "user"]);
});


// MULTIPLE VERBS
// Route::match(["GET", "POST"], "/blog", [PostsController::class, "index"]);

// ANY VERBS
// Route::any("/blog", [PostsController::class, "index"]);

// Return view without needing controllers
Route::view( "/view ", "blog.index", ["name" => "code with dhary"]);



// caaling theinvolk with a route
Route::get("/involke", HomeController::class);

// fallback route
Route::fallback(FallbackController::class);