@extends('layout')
@section('title', 'Agenda')
@section('main')
    <section class="events">
        @include('partials.allPosts')
        @include('partials.latestEvents', [
            'class' => 'footer',
        ])
    </section>
@endsection
