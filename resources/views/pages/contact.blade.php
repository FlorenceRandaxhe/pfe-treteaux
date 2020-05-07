@extends('layout')
@section('title', 'Contact')
@section('main')
    @include('partials.heroBasic', [
        'color' => 'grey',
        'title' => 'Contact',
        'intro' => 'Une question sur un de nos spectacles ? N’hésitez pas à nous contacter, nous reviendrons vers vous le plus rappidement possible',
        'img' => '',
        'type' => ''
    ])
    @include('partials.contact')
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
