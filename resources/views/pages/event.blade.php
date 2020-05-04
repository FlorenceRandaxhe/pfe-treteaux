@extends('layout')
@section('title', 'Agenda')
@section('main')
    <section class="events">
        @include('partials.allEvent')
        @include('partials.latestNews', [
            'class' => '',
        ])
    </section>
@endsection
