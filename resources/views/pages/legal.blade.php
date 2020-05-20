@extends('layout')
@section('title', Page::title())
@section('main')
    @include('partials.heroBasic', [
        'color' => 'grey',
        'title' => Page::title(),
        'intro' => '',
        'img' => '',
        'type' => ''
    ])
    <main class="main">
        <section class="legal">
            <div class="legal__container wrapper">
                <div class="wysiwyg">
                    @markdown {{ Page::get('content') }} @endmarkdown
                </div>
            </div>
        </section>
    </main>
@endsection
