{{-- all the data need to be dynamic --}}
@extends('welcome')
@section('title','Projecten:: Nimainteriors.com')
@section('content')
<section class="page">
    <!-- ***** Page Top Start ***** -->
    <div class="cover" data-image="{{ asset('frontend/assets/images/photos/project/project_cover.jpeg') }}">
        <div class="cover-top">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <h1>Once Projecten</h1>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Projects</li>
                        </ol>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- ***** Page Top End ***** -->

    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center border-bottom border-bottom-primary border-bottom-1 mb-md-4">
                    <h2 class="mb-4">Laat je inspireren</h2>
                    <p class="mb-8 text-center">Bij Nima Interiors transformeren we keukens tot verfijnde woonruimtes. Onze handtekening in design staat garant voor tijdloze elegantie. We combineren functionaliteit met verfijning, elk detail zorgvuldig overwogen. Jouw persoonlijke touch integreren we naadloos in het ontwerp. Bij ons vind je de perfecte harmonie tussen vorm en functie.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <div class="project-grid">
                        <div class="row">
                            {{-- <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                                <a href="/project-single" class="project-grid-item">
                                    
                                    <div class="text-h3 ">
                                        <h3>Inspiratie</h3>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('frontend/assets/images/photos/welcome/project-3.jpeg')}}" alt="">
                                    </div>
                                    <div class="text">
                                       
                                        <p>We streven ernaar om samen met jou een ontwerp te creëren dat perfectie benadert. Bij Nima Interiors hechten we waarde aan jouw input en streven we naar een resultaat dat jouw verwachtingen overtreft en de essentie van een droomkeuken weerspiegelt.</p>
                                    </div>
                                </a>
                            </div> --}}
                            @foreach($projectlist as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                                <a href="/dienstendesc/{{$item->id}}" class="project-grid-item">
                                    
                                    <div class="text-h3 ">
                                        <h3>{{$item->title}}</h3>
                                    </div>
                                    <div class="img">
                                        <img src="admin/project/{{$item->thumbnail}}" alt="">
                                    </div>
                                    <div class="text">
                                       
                                        <p>{{$item->description }}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach

                            {{-- <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                                <a href="/project-single" class="project-grid-item">
                                    
                                    <div class="text-h3 ">
                                        <h3>Realisaties</h3>
                                    </div>
                                    <div class="img">
                                        <img src="{{asset('frontend/assets/images/photos/welcome/project-2.jpeg')}}" alt="">
                                    </div>
                                    <div class="text">
                                        
                                        <p>Bij Nima Interiors staat vakmanschap van de hoogste kwaliteit centraal. Elk detail van jouw keuken wordt met zorg en precisie behandeld, van de keuze van de materialen tot de afwerking van de kleinste details. Met onze strenge controle en oog voor detail streven we naar niets minder dan perfectie in elk aspect van het ontwerp en de productie.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                                
                                <a href="/project-single" class="project-grid-item">
                                    <div class="text-h3 ">
                                        <h3>3D-renders</h3>
                                    </div>
                                    
                                    <div class="img">
                                        <img src="{{asset('frontend/assets/images/photos/welcome/project-1.jpeg')}}" alt="">
                                    </div>
                                    <div class="text">
                                        
                                        <p>Onze toewijding aan vakmanschap betekent dat geen detail over het hoofd wordt gezien. Van de keuze van de materialen tot de afwerking van de kleinste details, elk aspect van jouw keuken wordt met de grootste zorg en aandacht behandeld.</p>
                                    </div>
                                </a>
                            </div> --}}
                        
                          
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!-- ***** Page Content End ***** -->
</section>
<section class="section white">
    <div class="container white text-center container-cus">
        <h2>Onze partners</h2>
       
            <div class="partner-grid">
               
                <div>
                    <a href="https://www.novy.com/nl-be/" class="partner-item"  target="_blank">
                        <img src="{{asset('frontend/assets/images/photos/home/Novy_vierkant_website.png')}}" alt="Novy">
                        <p>Novy</p>
                    </a>
                </div>
                <div class="">
                    <a href="https://www.miele.be/nl/" class="partner-item"  target="_blank">
                    <img src="{{asset('frontend/assets/images/photos/home/Miele_vierkant_wesbite.png')}}" alt="">
                    <p>Miele</p>
                 </a>    
                </div>
                <div class="">
                    <a href="https://www.siemens-home.bsh-group.com/be/nl/" class="partner-item"  target="_blank">
                        <img src="{{asset('frontend/assets/images/photos/project/partner/Siemens_vierkant_test.png')}}" alt="">
                        <p>Siemens Studio Line</p>
                    </a>
                </div>
                <div class="">
                    <a href="https://www.bosch-home.nl/bosch-ontdekken/accent-line" class="partner-item"  target="_blank">
                        <img src="{{asset('frontend/assets/images/photos/project/partner/Bosch_vierkant_weebsite.png')}}" alt="">
                        <p>Bosch Accent Line</p>
                    </a>
                </div>
                <div class="">
                    <a href="https://www.blanco.com/be-nl/" class="partner-item"  target="_blank">
                        <img src="{{asset('frontend/assets/images/photos/project/partner/Blanco_vierkant_website.png')}}" alt="">
                        <p>Blanco</p>
                
                    </a>
                </div>
                <div class="">
                    <a href="https://www.quooker.be/nlbe/" class="partner-item"  target="_blank">
                        <img src="{{asset('frontend/assets/images/photos/project/partner/Quooker_vierkant_website.png')}}" alt="">
                        <p>Quooker</p>
                    </a>
                </div>
            </div>

       
    </div>
</section>
@endsection