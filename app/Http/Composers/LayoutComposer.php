<?php

namespace App\Http\Composers;

use Page;
use Storage;
use App\Post;
use Illuminate\View\View;
use Whitecube\NovaPage\Pages\Template;
use Illuminate\Support\Arr;

class LayoutComposer
{
    /**
     * Current page
     *
     * @var \Whitecube\NovaPage\Pages\Template
     */
    protected $page;

    /**
     * Current view
     *
     * @var \Illuminate\View\View
     */
    protected $view;

    /**
     * Create a new layout composer.
     *
     * @param \Whitecube\NovaPage\Pages\Template $page
     * @return void
     */
    public function __construct(Template $page = null)
    {
        $this->page = $page;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $this->view = $view;

        if(is_null($this->page)) {
            $this->page = $view->getData()['page'] ?? null;
        }
        $view->with('meta_og_title', $this->getOgTitle());
        $view->with('meta_twitter_title', $this->getTwitterTitle());
        $view->with('meta_description', $this->getDescription());
        $view->with('meta_og_description', $this->getOgDescription());
        $view->with('meta_twitter_description', $this->getTwitterDescription());
        $view->with('meta_image', $this->getImage());
    }

  /**
     * Find/generate the meta:description value
     *
     * @return string
     */
    protected function getDescription()
    {
        if (!$this->page) {
            return $this->description();
        }

        $value = $this->page ? $this->page->meta_description : null;

        return $value ?: Page::option('meta')->meta_description;
    }

    /**
     * Find/generate the meta:og:description value
     *
     * @return string
     */
    protected function getOgDescription()
    {
        if (!$this->page) {
            return $this->description();
        }

        $value = $this->page ? $this->page->meta_og_description : null;

        return $value ?: Page::option('meta')->meta_og_description;
    }

    /**
     * Find/generate the meta:twitter:description value
     *
     * @return string
     */
    protected function getTwitterDescription()
    {
        if (!$this->page) {
            return $this->description();
        }

        $value = $this->page ? $this->page->meta_twitter_description : null;

        return $value ?: Page::option('meta')->meta_twitter_description;
    }

    protected function description() {

        $data = $this->view->getData();
        if (Arr::exists($data, 'event')) {
            $current = $this->view->getData()['event'];
            $value = $current->intro;
        }

        if (Arr::exists($data, 'post')) {
            $current = $this->view->getData()['post'];
            $value = $current->title;
        }

        return $value;
    }

    /**
     * Find/generate generic Title
     *
     * @param string $append
     * @param string $separator
     * @return string
     */
    protected function getTitle($append = null, $separator = ' · ')
    {
        $signature = env('APP_NAME', 'Les Tréteaux');

        if (!$this->page) {
            return $this->title($signature);
        }

        if(!($base = $this->getBaseTitle())) {
            return $signature;
        }

        if($append === false) {
            return $base;
        }

        return trim($base . $separator . ($append ?? $signature), $separator);
    }

    protected function title($signature)
    {
        $data = $this->view->getData();
        if (Arr::exists($data, 'event')) {
            $current = $this->view->getData()['event'];
            $value = $current->title;

            return $value . ' - ' . $signature;
        }

        if (Arr::exists($data, 'post')) {
            $current = $this->view->getData()['post'];
            $value = $current->title;

            return $value . ' - ' . $signature;
        }
    }

    /**
     * Find the current page's base title
     *
     * @return null|string
     */
    protected function getBaseTitle()
    {
        return $this->page->title ?? null;
    }

    /**
     * Find/generate the meta:og:title value
     *
     * @return string
     */
    protected function getOgTitle()
    {
        $value = $this->page ? $this->page->meta_og_title : null;

        return $value ?: $this->getTitle(false);
    }

    /**
     * Find/generate the meta:twitter:title value
     *
     * @return string
     */
    protected function getTwitterTitle()
    {

        $value = $this->page ? $this->page->meta_twitter_title : null;

        return $value ?: $this->getTitle(false);
    }

    /**
     * Find/generate the meta:image value
     *
     * @return string
     */
    protected function getImage()
    {
        if (!$this->page) {
            $img = $this->image();
            return asset('storage/'. $img);
        }

        $value = $this->page ? $this->page->meta_image : null;

        if($value) {
            return asset(Storage::url($value));
        }

        return asset('img/social.jpg');
    }

    protected function image()
    {
        $data = $this->view->getData();
        if (Arr::exists($data, 'event')) {
            $current = $this->view->getData()['event'];
            $value = $current->img;

            return $value;
        }

        if (Arr::exists($data, 'post')) {
            $current = $this->view->getData()['post'];
            $value = $current->img;

            return $value;
        }
    }
}
