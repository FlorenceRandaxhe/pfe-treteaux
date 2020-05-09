@extends('layout')
@section('title', $post->title)
@section('main')
    @include('partials.heroBasic', [
        'color' => 'green',
        'title' => $post->title,
        'intro' => '',
        'type' => $post->tag->name,
        'img' => $post->img,
        'alt' => $post->title
    ])
    @include('partials.singlePost')
    @include('partials.newsletter', [
        'color' => 'green'
    ])
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
