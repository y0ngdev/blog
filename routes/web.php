<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn() => view('posts', ['posts' => Post::latest('published_at')->with('category','author')->get()]));

Route::get('posts/{post:slug}', fn(Post $post) => view('post', ['post' => $post]));

Route::get('categories/{category:slug}', fn(Category $category) => view('posts', ['posts' => $category->posts]));

Route::get('authors/{author}', fn(User $author) => view('posts', ['posts' => $author->post]));
