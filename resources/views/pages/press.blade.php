@extends('layout')
@section('title', 'Presse et média')
@section('main')
    @include('partials.allPress')
    @include('partials.newsletter', [
        'color' => 'blue'
    ])
    @include('partials.latestNews', [
        'class' => '',
    ])
@endsection
