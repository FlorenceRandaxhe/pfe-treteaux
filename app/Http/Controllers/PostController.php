<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __invoke()
    {
        return view('pages.post', [
            'posts' => Post::published()->paginate(8)
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.singleNews', [
            'post' => $post
        ]);
    }

}
