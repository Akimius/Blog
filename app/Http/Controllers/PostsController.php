<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index'); // complete path is posts.index.blade.php
    }
    public function show()
    {
        return view('posts.show'); // complete path is posts.index.blade.php
    }
    public function create()
    {
        return view('posts.create'); // complete path is posts.index.blade.php
    }

    public function store()
    {
        // Create a new post using the request data
        // $post = new Post;

/*        $post->title = request('title');
        $post->body = request('body');

        // Save it to the database
        $post->save();*/

        $this->validate(request(), [
            'title' => 'required|max:50',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));

        // Redirect to the home page
        return redirect('/');
    }

}
