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
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\postscontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/product','product');
// Route::view('/user','user');
Route::get('/user',[mycontroller::class ,'index']);

Route::get('/product',[postscontroller::class ,'showAll'])->name('product');

Route::post('/product',[postscontroller::class ,'save']);

Route::get("/product/createProduct", [postscontroller::class, 'create'])->name('createProduct');



Route::get("/product/{id}/delete", [postscontroller::class, 'delete'])->name('delete');



Route::get('/product/{id}/edit',[postscontroller::class, 'edit'])->name('edit');
Route::put('/product/{id}/update',[postscontroller::class, 'updateproduct'])->name('update');


