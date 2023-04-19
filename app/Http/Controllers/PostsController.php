<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * show all available posts in the database
     *
     * @return void
     */
    public function index()
    {
        //

        
        // $post = DB::statement("SELECT * FROM posts");
        // $posts = DB::select("SELECT * FROM posts");
        // $posts_insert = DB::insert("INSERT INTO posts (title, excerpt, body, image_path, is_published, min_to_read ) VALUES (?, ?, ?, ?, ?, ?)", ["Test", "Test", "test", "Test", true, 1]);
        // $posts_select_with_title = DB::select("SELECT * FROM posts WHERE title = 'Post Two'");
        // $posts = DB::select("SELECT * FROM posts WHERE id = :id", [ "id" => 10]);
        // $posts_select_with_id = DB::select("SELECT * FROM posts WHERE id = 1");
        // $posts_select_all = DB::select("SELECT * FROM posts");
        // $posts_update = DB::update("UPDATE posts set body = ? WHERE id = ?", ["Body 2", 3]);
        // $posts_delete = DB::delete("DELETE FROM  posts WHERE id = ? ", [102]);

        $posts = DB::table("posts")->get();

        // var_dump($posts);
        // dd($posts_insert);
        // dd($posts_select_with_title);
        // dd($posts_select_with_id);
        // dd($posts_select_all);
        // dd($posts_delete);

        dd($posts);


        
        return view("blog.index", [
            "name"  => "route variable"
        ]);
    }

    public function indexTwo()
    {
        //
        return view("blog.blog2", [
            "name"  => "route variable blog 2"
        ]);
    }

    public function user()
    {
        //
        return "user route";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 1)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}