@extends('welcome')
@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome">
        <div class="welcome-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="welcome-text">
                            <h1>Nima Interiors</h1>
                            {{-- <p>Welkom bij Nima Interiors, een toegewijd familiebedrijf sinds 2014.</p>  --}}
                             <p>Onze focus ligt op verfijnde detailwerk dat verschil maakt. Wij geloven in de
                                kracht van strakke, tijdloze ontwerpen.
                                </p>   
                            <a class="dark-btn" href="/diensten">
                                <span class="show-btn">EXPLORE KITCHEN</span>
                                <span class="hide-btn">EXPLORE KITCHEN</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="slider-position">&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="slider-wrapper">
                <div class="base">
                    <div class="prev">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="next">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
                {{-- dynamic value --}}
                <div class="owl-carousel">

                    <div class="item">
                        <div class="img">
                            <img src="{{asset('frontend/assets/images/photos/welcome/project-4.jpeg')}}" alt="">
                        </div>
                        <div class="text">
                            
                            <p>Onze toewijding aan vakmanschap betekent dat geen detail over het hoofd wordt gezien.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/images/photos/welcome/reealisatie.jpeg') }}" alt="">
                        </div>
                        <div class="text">
                          
                            <p>Met oog voor detail streven we naar niets minder dan perfectie in elk aspect van het ontwerp en de productie.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/images/photos/welcome/inspiratie.jpeg') }}" alt="">
                        </div>
                        <div class="text">
                            
                            <p>Bij Nima Interiors creëren we samen met jou een perfect ontwerp dat je verwachtingen overtreft.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Home Parallax Area Start ***** -->
    <section class="half-parallax">
       


    </section>
    <!-- ***** Home Parallax Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section white padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 style="font-family:Josefin Sans Flex, Josefin-Sans-Flex-Fallback, Noto Color Emoji, sans-serif; font-weight:600; font-size:28px;"
                            class="section-title dotted">Jouw bestemming voor verfijnde keukens en interieurdesign</h2>
                    </div>
                    <div class="left-text">
                        <p class="dark">Onze focus ligt op verfijnde detailwerk dat verschil maakt. Wij geloven in de
                            kracht van strakke, tijdloze ontwerpen. Elk element van onze keukens is met zorg en precisie
                            ontworpen, met aandacht voor de kleinste details. We zijn ervan overtuigd dat elk idee, hoe
                            verfijnd ook, binnen ons bereik ligt om tot werkelijkheid te brengen. Kan je het dromen? Dan
                            kunnen wij het maken.

                        </p>
                        <p class="margin-bottom-40">We bieden een persoonlijke benadering van ontwerp, waarbij jouw visie
                            centraal staat. Of je nu droomt van een moderne keuken met strakke lijnen of een tijdloos
                            klassiek ontwerp, bij Nima Interiors kunnen we jouw verlangde keuken werkelijkheid maken. </p>



                    </div>
                    <a class="dark-btn justify-content-center align-items-center" href="/diensten">
                       <div>
                        Laat je inspireren
                       </div>
                       <div class="arrow-p">
                        <i class="fa fa-arrow-right "></i>
                       </div>
                       
                    </a>

                </div>
                <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <div data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
                        <img src="{{ asset('frontend/assets/images/photos/welcome/home-1.jpeg') }}"
                            class="img-fluid float-right" alt="Title">
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="row no-gutters">
                        <div class="col-lg-6  ">
                            <div data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
                                <img src="{{ asset('frontend/assets/images/photos/home/showroom1.jpeg') }}"
                                    class="img-fluid float-right" alt="Title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-scroll-reveal="enter right move 30px over 0.6s after 0.3s">
                                <img src="{{ asset('frontend/assets/images/photos/home/show2.jpeg') }}"
                                    class="img-fluid float-right" alt="Title">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  col-sm-12 ">
                    <div class="left-heading">
                        <h2 class="section-title dotted">Onze showroom</h2>
                    </div>
                    <div class="left-text">
                        <p class="dark">Stap binnen en laat je verwelkomen in een tijdloze ruimte van inspiratie.We
                            nodigen je graag uit op afspraak en nemen de tijd om samen jouw droomkeuken tot in detail te
                            bespreken.

                        </p>
                        <p class="margin-bottom-40">Neem de tijd om comfortabel plaats te nemen. Het kiezen van jouw nieuwe
                            keuken is geen haastklus. Onze ruimte is ontworpen om je te inspireren, laat je creativiteit de
                            vrije loop terwijl je onze diverse ontwerpen verkent. </p>



                    </div>
                    <div>
                        <a href="/contact" class="btn  p-4 " style="color: #000;
                        background-color: #f5f5f5;
                        border-color: #6e7275;
                        font-size:1.2rem">
                            Plan een afspraak
                           
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
