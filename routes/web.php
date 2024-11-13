<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use Illuminate\Database\Eloquent\Collection;
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

Route::get('/blog',[PostController::class,'index'] );

Route::get('/blog/{post:id}',[PostController::class,'detail']);

Route::get('/categories/{category:id}',function(Category $category){
    return view('blog',[
        'title'=>"Category By : $category->name",
        'posts'=>$category->posts->load('category','user'),
        'category'=>$category->name
    ]);
});
Route::get('/author/{user:username}',function(User $user){
    return view('blog',[
        'title'=>"Author By : $user->name",
        'posts'=>$user->posts->load('category','user'),
        'user'=>$user->name
    ]);
});

Route::get('/login' ,[LoginController::class,'index']);

Route::get('/login/register',[RegisterController::class,'index']);

Route::post('/login/register',[RegisterController::class,'store']);

Route::get('/categories',function(){
    return view('categories',[
        'title'=>'Post category',
        'categories'=>Category::all()
    ]);
});


Route::get('/authors',function(){
    return view('authors',[
        'title'=>'Post Authors',
        'authors'=>User::all()
    ]);
});




Route::get('/admin/user',function(){
    return view('/admin/user',['title'=>'atmin']);
});
Route::get('/admin/history',function(){
    return view('/admin/history');
});

Route::get('/produk',function(){
    return view('/produk');
});