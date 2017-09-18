<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
