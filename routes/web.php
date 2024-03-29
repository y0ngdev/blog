<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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
|aaaaaaaaaaaaaaaaaaaaaaaaa
*/

Route::get('/', [PostController::class,'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('categories/{category:slug}', fn(Category $category) => view('post.posts', ['posts' => $category->posts]))->name('category');

Route::get('authors/{author:username}', fn(User $author) => view('post.posts', ['posts' => $author->posts]));
Route::get("register", [RegisterController::class, 'create']);

