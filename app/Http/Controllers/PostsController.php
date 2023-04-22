<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        // referencing table name directly

        // get all posts from table
        // $posts = DB::table("posts")->get();
        
        // get posts with clause 
        // $posts = DB::table("posts")->where("id", "=", 10) ->get();
        // $posts = DB::table("posts")->where("id", ">", 10)->get();
        // $posts = DB::table("posts")->where("id",  1)->get();
        // $posts = DB::table("posts")->where("is_published",  false)->get();
        // $posts = DB::table("posts")->where("is_published",  true)->where("id", "=", "100")->get();
        // $posts = DB::table("posts")->whereBetween("min_to_read", [2, 6])->get();
        // $posts = DB::table("posts")->whereNotBetween("min_to_read", [2, 6])->get();

        // between 1, 2 and 9
        // $posts = DB::table("posts")->whereIn("min_to_read", [1, 2, 9])->get();

        //  querying null values
        // $posts = DB::table("posts")->whereNull("excerpt")->get();

        // querying non null values
        // $posts = DB::table("posts")->whereNotNull("excerpt")->get();

        // querying dataase and ordering them
        // $posts = DB::table("posts")->orderBy("id", "desc")->get();

        // skipping data 
        // $posts = DB::table("posts")->skip(20)->take(10)->get();

        //  inrandom orders
        // $posts = DB::table("posts")->inRandomOrder()->get();

        // get average number
        // $posts = DB::table("posts")->avg("min_to_read");

        $posts = DB::table("posts")->find(5);
        $posts = DB::table("posts")->get();








        // var_dump($posts);
        // dd($posts_insert);
        // dd($posts_select_with_title);
        // dd($posts_select_with_id);
        // dd($posts_select_all);
        // dd($posts_delete);

        // dd($posts);


        
        // view with variable called "name" ..Variable can be changed
        // return view("blog.index", [
        //     "name"  => "route variable"
        // ]);

        // return view with posts variable
        //   return view("blog.index")->with("posts", $posts);

        // passing arrays to view
        //   return view("blog.index", compact("posts"));
          return view("blog.index", [
            "posts" => $posts
          ]);

    }
    

    public function default() 
    {
        // ELOQUENT QUERIES
        // getting all data in posts
        // $posts = Post::get();
        
        // $posts = Post::orderBy("id", "desc")->take(10)->get();
        // $posts = Post::where("min_to_read", "=", "2")->get();

        // sum and average
        // $posts = Post::sum("min_to_read");
        // $posts = Post::avg("min_to_read");

        $posts = Post::orderBy("updated_at", "desc")->get();

        dd($posts);
        
        return view("index", [
            "posts" => $posts
        ]);
    }

    public function defaultTwo() 
    {
        // ELOQUENT QUERIES

        $posts = Post::orderBy("updated_at", "desc")->get();

        return view("blog.indexTwo", [
            "posts" => $posts
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

        return view("blog.create");
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
        $posts = new Post();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 1)
    {
        $posts = Post::findOrFail($id);
        // dd($posts);

        return view("blog.show", [
            "post" => $posts
        ]);
        
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