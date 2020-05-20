@extends('layout')
@section('title', $event->title)
@section('main')
    @include('partials.hero', [
        'class' => 'right',
        'color' => 'pink',
        'type' => $event->type->name,
        'title' => $event->title,
        'text' => $event->intro,
        'img' => $event->img,
        'isEvent' => true,
        'btnType' => 'secondary',
        'alt' => $event->title,
        'file' => false,
        'url' => route('booking', ['event' => $event->slug]),
        'icon' => '',
        'label' => 'Réservez des places'
    ])
    <main class="main">
        @include('partials.eventContent')
        @include('partials.eventGallery')
        @include('partials.eventPress')
        @include('partials.latestEvents', [
            'class' => 'footer',
        ])
    </main>
@endsection
