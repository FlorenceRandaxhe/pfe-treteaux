@extends('layout')
@section('title', 'Agenda')
@section('main')
    @include('partials.heroEvents')
    @include('partials.allEvents')
    @include('partials.latestNews', [
        'class' => '',
    ])
@endsection
