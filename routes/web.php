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
    $blog =[
        [
            "title" => "naik gunung",
            "author" => "buky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa explicabo similique consequatur cupiditate odio. Officia quia quo magni, ipsam nemo voluptates ea sed impedit reiciendis ipsum atque ut necessitatibus molestiae iusto sint tempore ab rerum numquam porro velit quam. Dolorum est fuga perferendis ipsum autem aperiam recusandae repudiandae, corporis voluptas suscipit asperiores ratione. Totam expedita dicta aliquam nesciunt. Odio neque maxime sequi omnis natus a sint ut iusto labore voluptatum delectus dolor aut aliquam eligendi rerum cumque atque nulla, animi cum temporibus repellendus enim cupiditate doloribus? Velit at suscipit qui id nihil natus amet magni, saepe officia, culpa animi aliquid voluptas architecto tempore dignissimos? Aliquam laboriosam fugiat voluptas assumenda a repudiandae doloribus perferendis et ipsam consequuntur autem similique commodi quaerat earum quae veniam necessitatibus, beatae eius dolore culpa ut suscipit. Adipisci, accusamus voluptatem. Quis ipsam nostrum ut enim, distinctio alias atque officiis! Neque minima ratione unde eligendi asperiores impedit vel nemo quam rem? Debitis id in molestias porro eius amet voluptates error modi quae dolore delectus soluta molestiae nesciunt voluptatibus consequatur, placeat laudantium iure obcaecati suscipit totam repellat, perspiciatis alias adipisci? Illo tempora corporis optio nihil vero velit, dolorum fugit, facilis, sint expedita fugiat eaque accusamus vel. Recusandae, excepturi cum."
        ],
        [
            "title" => "naik gunung kembar",
            "author" => "rian sinegar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa explicabo similique consequatur cupiditate odio. Officia quia quo magni, ipsam nemo voluptates ea sed impedit reiciendis ipsum atque ut necessitatibus molestiae iusto sint tempore ab rerum numquam porro velit quam. Dolorum est fuga perferendis ipsum autem aperiam recusandae repudiandae, corporis voluptas suscipit asperiores ratione. Totam expedita dicta aliquam nesciunt. Odio neque maxime sequi omnis natus a sint ut iusto labore voluptatum delectus dolor aut aliquam eligendi rerum cumque atque nulla, animi cum temporibus repellendus enim cupiditate doloribus? Velit at suscipit qui id nihil natus amet magni, saepe officia, culpa animi aliquid voluptas architecto tempore dignissimos? Aliquam laboriosam fugiat voluptas assumenda a repudiandae doloribus perferendis et ipsam consequuntur autem similique commodi quaerat earum quae veniam necessitatibus, beatae eius dolore culpa ut suscipit. Adipisci, accusamus voluptatem. Quis ipsam nostrum ut enim, distinctio alias atque officiis! Neque minima ratione unde eligendi asperiores impedit vel nemo quam rem? Debitis id in molestias porro eius amet voluptates error modi quae dolore delectus soluta molestiae nesciunt voluptatibus consequatur, placeat laudantium iure obcaecati suscipit totam repellat, perspiciatis alias adipisci? Illo tempora corporis optio nihil vero velit, dolorum fugit, facilis, sint expedita fugiat eaque accusamus vel. Recusandae, excepturi cum."
        ]
        ];
    return view('blog',[
        "title" => "blog",
        "posts" => $blog

    ]);
});
Route::get('/sbadmin2',function(){
    return view('sbadmin2');
});

Route::get('/admin/user',function(){
    return view('/admin/user');
});
Route::get('/admin/history',function(){
    return view('/admin/history');
});