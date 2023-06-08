<?php

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

// Route::get('/iti' , function(){
//     return 'aaaa';
// });

// Route::view('/base' ,'baseTemplate');

// // Route::get('/base', function () {
// //     return view('baseTemplate');
// // });
Route::view('/form','form');
// Route::view('/posts','posts');

####### use controller

use App\Http\Controllers\postscontroller;

Route::get('posts',[postscontroller::class , 'getPosts']);

