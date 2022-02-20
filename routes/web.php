<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //require
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
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name("posts.edit");
Route::get('/posts/{post}', [PostController::class, 'show'] )->name('posts.show');
Route::post('/posts/store', [PostController::class, 'store'] )->name('posts.store');
Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name("posts.delete");

Route::patch('/posts/{post}',[PostController::class, 'update'])->name("posts.update");

// Route::get('/test', function () {
//     // $x= [ ['id'=> 1, 'name'=> 'abdelrahman'], ['id'=> 2, 'name'=> 'Ali'] ];
//     // return view('test', ['users'=> $x , 'greeting'=> 'Hello abdelrahman from variable greeting']);
// });

