<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index() {
        $highlight = Post::where('rating_count', Post::max('rating_count'))->get();
        $latest = Post::orderBy('date', 'desc')->get();
        $posts = Post::all();

        return view('home', [
            'posts' => $posts,
            'latest' => $latest,
            'highlight' => $highlight[0]
        ]);
    }

    public function show($id) {
        $post = Post::find($id);

        return view('detail', [
            'post' => $post
        ]);
    }
}
