@extends('layout')
@section('title', 'Agenda')
@section('main')
    @include('partials.allEvent')
    @include('partials.latestNews', [
        'class' => '',
    ])
@endsection
