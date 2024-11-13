<?php
    namespace App\Http\Controllers;

    use Illuminate\Request;
    use App\Models\Post;

    class PostController extends Controller{
        public function index()
        {
            return view('blog',[
                "title" => "All Blog",
                // "posts" => Post::all()
                "posts" => Post::latest()->get()
            ]);
        }
        public function detail(Post $post){
            return view('post',[
                "title" =>"single-post",
                "post" => $post
            ]);
        }
    }
?>