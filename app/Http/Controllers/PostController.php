<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {


        return view('post.posts', [
            'posts' => Post::latest('published_at')->filter(
                request(['query', 'category']))->paginate()
        ]);
    }

    public function show(Post $post)
    {
        return view('post.post', ['post' => $post]);
    }
}
