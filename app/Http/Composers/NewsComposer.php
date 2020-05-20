<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Post;

class NewsComposer
{
    protected $posts;
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Post $posts)
    {
        $this->posts = $posts;
        $this->post = Route::currentRouteName();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('posts', $this->getPost());
    }

    protected function getPost(){
        //dd($this->post);
        if ($this->post === 'singleNews') {
            $data = Route::current()->name('singleNews')->post;

            $posts = Post::published()
            ->where('slug', '!=', $data->slug)
            ->where('tag_id', '=', $data->tag_id)->limit(3)->get();
            return $posts;
        }

        $posts = Post::published()->limit(3)->get();
        return $posts;

    }
}