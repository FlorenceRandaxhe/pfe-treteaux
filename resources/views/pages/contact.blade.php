@extends('layout')
@section('title', 'Contact')
@section('main')
    @include('partials.contact')
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
