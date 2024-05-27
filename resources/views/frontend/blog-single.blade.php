@extends('welcome')
@section('content')
<section class="page">

<div class="cover" data-image="{{asset('frontend/assets/images/photos/project/project_cover.jpeg')}}">
    <div class="cover-top">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <h1>Realisaties</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Project</li>
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
            <h3 class="text-center mb-5">{{$blog->title}}</h3>
           

            <div class="blog-content text-justify mt-4">
            {!! $blog->description !!}
                
            </div>
            <div class="text-center">
                <a href="/contact">Plan een bezoek</a>
            </div>
            
        </div>
        
    </div>
</div>
</section>
@endsection