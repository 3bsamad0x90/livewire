<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\ShowPosts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//posts
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::post('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
//users
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::post('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::post('/{user}', [UserController::class, 'destroy'])->name('users.destroy');

//livewire paths for posts
Route::get('/livewire-posts', ShowPosts::class)->name('livewire-posts');
