<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category'])->paginate(6);
        // $posts_categories = [];
        // foreach ($posts as $post) {
        //     $category = $post->category;
        //     $post ['category'] = $category;
        //     $posts_categories[] = $post;
        // }
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
}
