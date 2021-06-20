<?php

namespace App\Http\Controllers\Home;


use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function indexData()
    {
        return Post::with('author')->paginate(3);
    }

    public function showData($id, Request $request)
    {
        if ($post = Post::find($id)) {
            return $post;
        }
    }

}
