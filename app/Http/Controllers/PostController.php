<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts', [
            "posts" => Post::latest()->filter(request(['search']))->get(), // Prevents the n+1 problem
            'categories' => Category::all()
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            'post'=> $post, //Post::findOrFail($post),
            'posts' => Post::all()
        ]);
    }
}
