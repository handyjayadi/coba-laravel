<?php
    namespace App\Http\Controllers;

    use Illuminate\Request;
    use App\Models\Post;

    class PostController extends Controller{
        public function index()
        {
            return view('blog',[
                "title" => "All Blog",
                "posts" => Post::latest()->filter(request(['search']))->paginate(4)->withQueryString()
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