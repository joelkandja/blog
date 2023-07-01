<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostContoller extends Controller
{
    public function detailPost($id)
    {
        if (Post::find($id) === null) {
            abort(404);
        }
        $post = Post::find($id);

        return view("blog.detailPost", compact('post'));
    }
}
