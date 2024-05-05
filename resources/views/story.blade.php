@extends('layouts.layout')
@section('title', 'Worship with Us Today at MFM Rehoboth')
@section('description', 'Worship with us and connect with God in the best way you never experienced')

@section('content')

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5">Your Story</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Stories</li>
                </ul>
            </div>
        </div>
    </section>

   
   <div class="container" style="margin-top:100px; margin-bottom:100px;">
    <div class="row">
        <div class="col-md-6 col-lg-6 ps-xl-5 ps-lg-4 mt-lg-0 mt-5">
            <h5 class="sub-title">Our Stories</h5>
            <h3 class="title-style mb-4">Why you should worship with us?</h3>
            <p>Welcome to MFM Rehoboth Church, where every journey finds purpose and every story is valued. 
                Our community is built on the foundation of faith, love, and acceptance, 
                welcoming individuals from all walks of life to join us in worship, fellowship, and service. </p>
            <div class="two-grids mt-5">
                <div class="grids_info">
                    <i class="fas fa-trophy"></i>
                    <div class="detail">
                        <h4>Personal Testimonies</h4>
                        <p>MFM Rehoboth encourages members to share their personal testimonies, highlighting the transformative power of faith in their lives.
                            These stories serve as sources of inspiration and encouragement for the entire congregation.</p>
                    </div>
                </div>
                <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                    <i class="fas fa-user-friends"></i>
                    <div class="detail">
                        <h4>Embracing Diversity</h4>
                        <p>every individual's journey is valued and celebrated, regardless of background or circumstance. 
                            The church community fosters an environment of inclusivity and acceptance, 
                            where diverse stories enrich and strengthen the collective narrative of faith.</p>
                    </div>
                </div>
                <div class="grids_info mt-xl-5 mt-lg-4 mt-5">
                    <i class="fas fa-hourglass-half"></i>
                    <div class="detail">
                        <h4>Community Outreach</h4>
                        <p> Beyond the church walls, 
                            Your Story Church is actively involved in outreach initiatives, 
                            extending love and support to those in need</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-grids">
                @include('home.contact-form')
            </div>
        </div>
    </div>
</div>
@endsection