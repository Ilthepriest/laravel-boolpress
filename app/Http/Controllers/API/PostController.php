<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with(['tags', 'category', 'user'])->orderByDesc('id')->paginate(9);  //con with mostra le relazioni (oppure all())
        return $posts;
    }

    public function show($slug){
        $post = Post::with(['tags', 'category', 'user'])->where('slug', $slug)->first();
        if($post){
            return $post;
        }else{
            return response()->json([
                'status_code' => 404,
                'satus_text' => 'not found'
            ]);
        }
        
    }
}
