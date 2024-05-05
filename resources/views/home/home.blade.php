@extends('layouts.layout')
@section('title', 'Worship with Us Today at MFM Rehoboth')
@section('description', 'Worship with us and connect with God in the best way you never experienced')

@section('content')

        @include('home.carousel')

        @include('home.about')
        <!-- @include('home.programs') -->
        @include('home.why')
        @include('home.team')
        @include('home.join')
        @include('home.events')

@endsection
