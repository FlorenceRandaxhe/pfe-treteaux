<?php

namespace App\Http\Controllers;

use App\Season;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\RentingRequest;


class RentingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::published()->limit(3)->get();

        return view('pages.renting', [
            'posts' => $posts
        ]);
    }


    public function submit(RentingRequest $request)
    {

        return redirect()->to(url()->previous() . '#form')->with('success', true);
    }
}
