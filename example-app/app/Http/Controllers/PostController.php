<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        //metode, kas atgriez visus post ierakstus
        $posts = Post::all();
        // \Log::debug($posts);
        return view('posts.index', ['allposts' => $posts]);
    }

    public function show($id){
        
        $post = Post::find($id);
        \Log::debug($id);
        return view('posts.show', ['singlepost' => $post]);
    }
    
    public function store(Request $request) {
        \Log::debug($request);

        $post = Post::create($data);
        return to_route('post.show', $post)->with()
    }
}
