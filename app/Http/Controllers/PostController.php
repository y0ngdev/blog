<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest('published_at');

        if (request('query')){
            $posts->where('title','like','%'.request('query').'%')
                ->orWhere('body','like','%'.request('query').'%');
        }

        return view('posts', ['posts' =>
            $posts->get()]);
    }   public function show(){
        $posts = Post::latest('published_at');

        if (request('query')){
            $posts->where('title','like','%'.request('query').'%')
                ->orWhere('body','like','%'.request('query').'%');
        }

        return view('posts', ['posts' =>
            $posts->get()]);
    }
}
