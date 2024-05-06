@extends('welcome')
@section('content')
    @if (session('message'))
        <p>{{ 'message' }}</p>
    @endif
    <section class="page">
        <!-- ***** Page Top Start ***** -->
        <div class="cover" data-image="{{ asset('frontend/assets/images/photos/cover.jpg') }}">
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

            <div class="container">
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
            </div>
            <div class="container">
                <div class="">
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
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5 class="margin-bottom-30">Neem contact met ons op</h5>
                            <div class="contact-text">
                                <p>Open op afspraak </p>
                                <p>Herentalsebaan 301, 2150 Borsbeek</p>
                            </div>
                        </div>
                        <!-- ***** Contact Text End ***** -->

                        <!-- ***** Contact Form Start ***** -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <form action="{{ route('contactform') }}" method="POST">
                                @csrf
                                <div class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <input type="text" name="fname" placeholder="Enter your first name">
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <input type="text" name="lname" placeholder="Enter your last name">
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <input type="text" name="phonenumber" placeholder="Enter your phone number">
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <input type="email" name="email" placeholder="Enter your E-Mail">
                                        </div>

                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <input type="number" name="streetnumber"
                                                placeholder="Enter your street number">
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-sm-12">
                                            <input type="text" name="pcodeandc"
                                                placeholder="Enter your postcode and city">
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-sm-12 mb-3">

                                            <select name="iam" class="form-control">

                                                <option value="particulars">Particular</option>
                                                <option value="architect">Architect</option>
                                                <option value="constructionpromoter">Construction Promoter</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-10 col-md-12 col-sm-12 mb-3">

                                            <select name="project" class="form-control">


                                                <option value="newconstruction">New Construction</option>
                                                <option value="renovation">Renovation</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea name="message" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="dark-btn float-right" type="submit">
                                                <span class="show-btn">SUBMIT</span>
                                                <span class="hide-btn">SUBMIT</span>
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
@endsection
