<?php

use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('post/', function () {

    $collection = Post::findorfail(1);
    ddd($collection);
});
Route::get('posts/{post:slug}',fn(Post $post) => view('post', [ 'post' => $post]));
