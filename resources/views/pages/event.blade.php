@extends('layout')
@section('title', 'Agenda')
@section('main')
    <section class="events">
        @include('partials.allEvents')
        @include('partials.latestNews', [
            'class' => '',
        ])
    </section>
@endsection
