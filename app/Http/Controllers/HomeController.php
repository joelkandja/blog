<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index() {
    
    $posts = Post::limit(6)->get();
    $post = Post::latest()->first();

    $categorie = Categorie::latest()->first();

   //  dd($categorie);

    return view("blog.index", compact("posts", "post", "categorie"));
   }
}
