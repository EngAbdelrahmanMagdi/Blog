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

Route:: get('/post', [PostController::class, 'index'] );

// Route::get('/test', function () {
//     // $x= [ ['id'=> 1, 'name'=> 'abdelrahman'], ['id'=> 2, 'name'=> 'Ali'] ];
//     // return view('test', ['users'=> $x , 'greeting'=> 'Hello abdelrahman from variable greeting']);
// });

