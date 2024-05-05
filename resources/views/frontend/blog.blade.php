@extends('welcome')
@section('content')

<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="{{asset('frontend/assets/images/photos/project/project_cover.jpeg')}}">
        <div class="cover-top">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <h1>BLOG</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-bottom-30">
                    <div class="row">
                        <!-- ***** Blog Item Start ***** -->
                        <div class="col-lg-5 col-md-6 col-sm-12 mb-4 mr-2" >
                            <a href="/blog-single" class="">
                                <div class="content">
                                    <h3>Hoe lang duurt de plaatsing van een nieuwe keuken?</h3>
                                </div>
                                <div class="blog-post-grid">
                                    <img src="{{ asset('frontend/assets/images/photos/welcome/blog-1.jpeg') }}" alt="" style="width: 100%; height: 300px;">
                                    <div class="date">APR 09</div>
                                </div>
                            </a>
                        </div>
                        <!-- ***** Blog Item End ***** -->
            
                        <!-- ***** Blog Item Start ***** -->
                        <div class="col-lg-5 col-md-6 col-sm-12 mb-4 ml-2">
                            <a href="/blog-single" class="">
                                <div class="content">
                                    <h3>A hotel in the heart of Copenhagen’s Latin Quarter</h3>
                                </div>
                                <div class="blog-post-grid">
                                    <img src="{{ asset('frontend/assets/images/photos/welcome/blog-2.jpeg') }}" alt="" style="width: 100%; height: 300px;">
                                    <div class="date">APR 09</div>
                                </div>
                            </a>
                        </div>
                        <!-- ***** Blog Item End ***** -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>

@endsection