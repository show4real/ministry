@extends('layouts.layout')
@section('title', 'Building and Engineering Services | Pro Builder Engineering')

@section('content')

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5">About Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>About</li>
                </ul>
            </div>
        </div>
    </section>

    @include('home.about')
    <!-- @include('home.steps') -->
    @include('home.why')
    @include('home.team')
    <!-- @include('home.testimonial') -->

@endsection
