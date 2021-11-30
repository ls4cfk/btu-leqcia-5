<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function showPosts() {
        $posts = Post::all();
        return view("posts", [
            "posts" => $posts
        ]);
    }

    public function post($id) {
        $posts = Post::find($id);
        return view("post", [
            "post" => $posts
        ]);
    }
}
