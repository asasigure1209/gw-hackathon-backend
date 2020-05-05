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

    Route::post("/login",function(){
        $uid = request()->get("uid");
        $password = request()->get("password");
        $user = \App\KipUser::where("uid",$uid)->first();
        if ($user && $password == $user->password) {
            $token = Str::random();
            $user->token = $token;
            $user->save();
            return [
                "token" => $token,
                "user" => $user
            ];
        }else{
            abort(401);
        }
    });

    Route::post("/logout",function(){
        $token = request()->bearerToken();
        $user = \App\KipUser::where("token",$token)->first();
        if ($token && $user) {
         $user->token = "";
         $user->save();
         return response(200);
        }else{
         abort(401);
        }
    });
    
    Route::resource('kip_users', 'KipUsersController');
    Route::resource('posts', 'PostsController');
    Route::resource('likes', 'LikesController');
    Route::resource('usefuls', 'UsefulsController');
    Route::resource('categories', 'CategoriesController');
});