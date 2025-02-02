<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }
    public function show($id){
        return view('post.show', ['title'=>Post::find(1)]);
    }
}
