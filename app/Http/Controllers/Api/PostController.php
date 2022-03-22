<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

        $api = Post::all();
        return response()->json($api);
    }
    public function filter($category_id){
        
        $api = Post::where('category_id', $category_id)->get();
        return response()->json($api);
    }
}
