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
Route::middleware(['cors', 'token.auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('login', 'KipUsersController@login');
    Route::post('logout', 'KipUsersController@logout');
    
    Route::get('posts_count', 'PostsController@count');

    Route::resource('kip_users', 'KipUsersController');
    Route::resource('posts', 'PostsController');
    Route::resource('likes', 'LikesController');
    Route::resource('usefuls', 'UsefulsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('comments', 'CommentController');
});