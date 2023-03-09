<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'posts' => Post::latest('published_at')->filter(request(['query', 'category']))->get()
        ]);
    }
}
