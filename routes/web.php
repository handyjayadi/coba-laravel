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
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "nama" =>  "handy",
        "gmail" => "handyJ@gmail.com",
        "umur" => "21"

    ]);
});

Route::get('/blog', function () {
    return view('blog',[
        "title" => "blog",
        "posts" => Post::all()

    ]);
});
Route::get('/sbadmin2',function(){
    return view('sbadmin2');
});



Route::get('/blog/{slug}',function($slug){
    
    return view('post',[
        "title" =>"single-post",
        "post" => Post::find($slug)
    ]);
});

Route::get('/admin/user',function(){
    return view('/admin/user');
});
Route::get('/admin/history',function(){
    return view('/admin/history');
});