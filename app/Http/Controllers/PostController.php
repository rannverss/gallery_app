<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller; 

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('welcome', compact('posts'));
    }
}
