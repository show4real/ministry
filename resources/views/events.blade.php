@extends('layouts.layout')
@section('title', 'Worship with Us Today at MFM Rehoboth')
@section('description', 'Worship with us and connect with God in the best way you never experienced')

@section('content')

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5">Events</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Events</li>
                </ul>
            </div>
        </div>
    </section>

    @include('home.events')
    @include('home.join')

@endsection