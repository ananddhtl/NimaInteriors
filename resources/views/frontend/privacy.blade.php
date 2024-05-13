@extends('welcome')
@section('content')
<section class="page">

<div class="cover" data-image="{{asset('frontend/assets/images/photos/project/project_cover.jpeg')}}">
    <div class="cover-top">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <h1>Privacy</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Privacy</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Page Top End ***** -->
<div class="page-bottom">
    <div class="container mb-6">
        <div >
            
           

            <div class="blog-content text-justify mt-4">
            {!! $data[0]->description !!}
                
            </div>
            <div class="text-center">
                <a href="/contact">Plan een bezoek</a>
            </div>
            
        </div>
        
    </div>
</div>
</section>
@endsection