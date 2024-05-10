@extends('welcome')
@section('content')
    @if (session('message'))
        <p>{{ 'message' }}</p>
    @endif
    <section class="page">
        <!-- ***** Page Top Start ***** -->
        <div class="cover" data-image="{{ asset('frontend/assets/images/photos/project/project_cover.jpeg') }}">
            <div class="cover-top">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6">
                            <h1>CONTACT</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Page Top End ***** -->

        <!-- ***** Page Content Start ***** -->
        <div class="page-bottom ">
            <!-- ***** Map Container Start ***** -->
            <div class="section map">

            </div>
            <!-- ***** Map Container End ***** -->

            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fa fa-location-arrow"></i>
                                        </div>
                                        <p>Herentalsebaan 301 <br>2150 Borsbeek</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <a href="tel:+32 3 296 82 66">+32 3 296 82 66</a>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>

                                        <a href="mailto:info@nimainteriors.com">info@nimainteriors.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="container mb-4 b-line">
                <div class="contact-title-content">
                    <h5 class="margin-bottom-30">Breng je interieur naar een hoger niveau met Nima Interiors</h5>
                    <div class="contact-text">
                        <p>Benieuwd hoe wij jouw interieurinrichting transformeren? Maak een afspraak in onze showroom. </p>
                        <p>Vul het contactformulier in of bel ons vandaag nog. We staan klaar om je te helpen jouw visie
                            werkelijkheid te maken.</p>
                    </div>
                </div>
            </div>
            <div class="contact-bottom">
                <div class="container">
                    <div class="row">
                        <!-- ***** Contact Text Start ***** -->
                        <div class="col-lg-6 col-md-6 col-sm-12  text-right">
                            <h5 class="margin-bottom-30">Neem contact met ons op</h5>
                            <div class="contact-text">
                                <p>Open op afspraak </p>
                                <p>Herentalsebaan 301, 2150 Borsbeek</p>
                            
                                <p>info@nimainteriors.com  </p>
                                <p><i class="fa fa-phone"></i>+3232968266</p>
                            </div>
                            <div class="iframe-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976!2d1!3d1!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sHerentalsebaan+301%2C+2150+Borsbeek!5e0!3m2!1snl!2sBE!4v1714897402000"   loading="lazy"></iframe>
                            </div>
                        </div>
                        <!-- ***** Contact Text End ***** -->

                        <!-- ***** Contact Form Start ***** -->
                        <div class="col-lg-6 col-md-6 col-sm-12 border-left">
                            <form action="{{ route('contactform') }}" method="POST">
                                @csrf
                                <div class="contact-form">
                                    <div class="row">
                                        {{-- firstname --}}
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="fname" placeholder="Voornaam" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="lname" placeholder="Achternaam" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <select name="iam" class="form-select" aria-label="Ik ben" required>
                                                <option selected disabled hidden>Ik ben</option>
                                                <option value="particulars">Particulier</option>
                                                <option value="architect">Architect</option>
                                                <option value="constructionpromoter">Bouwpromoter</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <select name="project" class="form-select" required>
                                                <option selected disabled hidden>Kies  project type</option>
                                                <option value="newconstruction">Nieuwbouw</option>
                                                <option value="renovation">Renovatie</option>
                                                <option value="others">Andere</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="phonenumber" placeholder="Telefoonnummer" required>
                                        </div>
                                        
                            
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="number" name="streetnumber" placeholder="Straat en nummer" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="pcodeandc" placeholder="Postcode en stad" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <input type="email" name="email" placeholder="E-mailadres" required>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea name="message" placeholder="Your message" required></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="dark-btn float-right" type="submit">
                                                <span class="show-btn">Verzend</span>
                                                <span class="hide-btn">Verzend</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        <!-- ***** Contact Form End ***** -->
                    </div>
                </div>
            </div>
         
        </div>


        <!-- ***** Page Content End ***** -->
    </section>
    <section class="section profile-section white pt-5">
        <div class="container white">
            <div class="row">
                <div class="img-profile col-lg-6 col-md-6 col-sm-12">
                   
                        <img src="{{ asset('frontend/assets/images/photos/contact/MajdaenAdam.jpeg') }}"
                        class="img-fluid"  alt="Title">
                   
                </div>
                <div class="profile-info col-lg-6 col-md-6 col-sm-12  text-justify">
                    <h3 class=" pb-4">
                        Een toegewijd familiebedrijf sinds 2014
                    </h3>
                    <p>
                        Welkom bij Nima Interiors. Onze reis begon met een gedeelde passie voor interieur. 
                        Na jarenlange ervaring bij gerenommeerde interieurbedrijven besloten Adam en Majda 
                        hun eigen weg te gaan. Wat ooit begon als een breed scala aan interieurinrichtingen, 
                        evolueerde al snel naar een bijzondere focus op keukens en elk aspect van huiselijk comfort
                    </p>
                    <p>
                        Nu, ruim twintig jaar later, hebben we ons gespecialiseerd in het ontwerpen en realiseren van 
                        verfijnde interieurs, van keukens tot aan elk detail dat bijdraagt aan de sfeer van thuis. 
                        Gedurende onze reis hebben we onze eigen unieke stijl ontwikkeld, 
                        een stijl die met trots wordt herkend als die van Nima Interiors, maar bovenal als jouw persoonlijke signatuur.
                    </p>
                </div>
            </div>
           
        </div>
    </section>
@endsection
