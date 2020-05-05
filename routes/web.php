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
Route::middleware(['cors'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::resource('kip_users', 'KipUsersController');
    Route::resource('posts', 'PostsController');
    Route::resource('likes', 'LikesController');
    Route::resource('usefuls', 'UsefulsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('articles', 'ArticlesController');
});