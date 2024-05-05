@extends('layouts.layout')
@section('title', 'Worship with Us Today at MFM Rehoboth')
@section('description', 'Worship with us and connect with God in the best way you never experienced')

@section('content')

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="w3l-contact-2 py-5" id="contact">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="w3l-header-sec text-center mb-md-5 mb-4">
                <h5 class="sub-title">Send Us Message</h5>
                <h3 class="title-style">Contact Us</h3>
            </div>
            <div class="contact-grids d-grid">
                <div class="contact-left-img">
                    <img src="assets/images/banner3.jpg" class="img-fluid radius-image" alt="">
                </div>
                <div class="contact-right">
                    @include('home.contact-form')
                </div>
            </div>

            @include('home.address')
            @include('home.map')
        </div>
    </section>

  

@endsection
