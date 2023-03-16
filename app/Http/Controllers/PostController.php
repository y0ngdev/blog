<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
    return    Post::latest('published_at')->filter(
            request(['query', 'category']))->get();

//        return view('post.posts', [
//            'posts' => Post::latest('published_at')->filter(
//                request(['query', 'category']))->get()
//        ]);
    }

    public function show(Post $post)
    {
        return view('post.post', ['post' => $post]);
    }
}
