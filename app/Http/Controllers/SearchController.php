<?php

namespace App\Http\Controllers;

use App\Event;
use App\Post;
use App\Type;
use App\Resto;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query =  $request->q;

        return view('pages.search', [
            'events' => Event::where('title', 'LIKE', "%$query%")->orderBy('date', 'ASC')->paginate(6),
            'posts' => Post::where('title', 'LIKE', "%$query%")->orderBy('published_at', 'DESC')->paginate(6)
        ]);

    }
}
