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
                            <p>Welkom bij Nima Interiors, een toegewijd familiebedrijf sinds 2014.</p>
                            <a class="dark-btn" href="project-grid.html">
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
                            <img src="{{ asset('frontend/assets/images/photos/welcome/img-2.jpeg') }}" alt="">
                        </div>
                        <div class="text">
                            <h5>High Gloss Lacquer</h5>
                            <p>Mauris sagittis feugiat dui vel varius.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/images/photos/welcome/3.jpg') }}" alt="">
                        </div>
                        <div class="text">
                            <h5>Veneer Kitchen</h5>
                            <p>Mauris sagittis feugiat dui vel varius.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/images/photos/welcome/4.jpg') }}" alt="">
                        </div>
                        <div class="text">
                            <h5>Driftwood</h5>
                            <p>Mauris sagittis feugiat dui vel varius.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('frontend/assets/images/photos/welcome/5.jpg') }}" alt="">
                        </div>
                        <div class="text">
                            <h5>Sawn Oak</h5>
                            <p>Mauris sagittis feugiat dui vel varius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Home Parallax Area Start ***** -->
    <section class="half-parallax">
        {{-- <div class="parallax-image">



		</div> --}}
        {{-- <div class="parallax-items">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="parallax-item">
							<i class="fa fa-hourglass-o"></i>
							<h5 class="feature-title">PLANNING</h5>
							<p>Proin luctus odio et purus iaculis, et porta ex molestie. Curabitur euismod nulla enim.</p>
							<a class="dark-btn" href="gallery.html">
								<span class="show-btn">READ MORE</span>
								<span class="hide-btn">READ MORE</span>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="parallax-item">
							<i class="fa fa-connectdevelop"></i>
							<h5 class="feature-title">INTERIOR</h5>
							<p>Vestibulum justo odio, auctor sed elit vitae, sollicitudin varius metus. Maecenas diam.</p>
							<a class="dark-btn" href="gallery.html">
								<span class="show-btn">READ MORE</span>
								<span class="hide-btn">READ MORE</span>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="parallax-item">
							<i class="fa fa-flag-o"></i>
							<h5 class="feature-title">EXTERIOR</h5>
							<p>Integer tincidunt aliquam nibh. Sed sed velit tristique, egestas lorem eu, fermentum diam.</p>
							<a class="dark-btn" href="gallery.html">
								<span class="show-btn">READ MORE</span>
								<span class="hide-btn">READ MORE</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
    </section>
    <!-- ***** Home Parallax Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section white padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 style="font-family:Josefin Sans Flex, Josefin-Sans-Flex-Fallback, Noto Color Emoji, sans-serif; font-weight:600; font-size:28px;" class="section-title dotted">Jouw bestemming voor verfijnde keukens en interieurdesign</h2>
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
                    <a class="dark-btn" href="#">
                        <span class="show-btn">EXPLORE MORE</span>
                        <span class="hide-btn">EXPLORE MORE</span>
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
    <section class="section   padding-bottom-120">
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
                <div class="col-lg-4 col-md-12 col-sm-12 ">
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
                        <a href="/project">Plan een afspraak</a><i class="bi bi-arrow-left"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ***** Blog Start ***** -->
    {{-- <section class="section white padding-bottom-120">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Latest Blog Posts</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row">
				<!-- ***** Blog Item Start ***** -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<a href="blog-single.html" class="blog-post-grid">
						<img src="{{asset('frontend/assets/images/photos/welcome/blog-1.jpeg')}}" alt="">
						<div class="content">
							<h3>Chief clubhouse for female executives opens in Boston</h3>
							<div class="date">APR 09</div>
						</div>
					</a>
				</div>
				<!-- ***** Blog Item End ***** -->

				<!-- ***** Blog Item Start ***** -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<a href="blog-single.html" class="blog-post-grid">
						<img src="{{asset('frontend/assets/images/photos/welcome/blog-2.jpeg')}}" alt="">
						<div class="content">
							<h3>A hotel in the heart of Copenhagen’s Latin Quarter</h3>
							<div class="date">APR 09</div>
						</div>
					</a>
				</div>
				<!-- ***** Blog Item End ***** -->

				<!-- ***** Blog Item Start ***** -->
				<!-- <div class="col-lg-4 col-md-6 col-sm-12">
					<a href="blog-single.html" class="blog-post-grid">
						<img src="assets/images/photos/blog/3.jpg" alt="">
						<div class="content">
							<h3>Skandium’s eco townhouse for LDF18 with Montana</h3>
							<div class="date">APR 09</div>
						</div>
					</a>
				</div> -->
				<!-- ***** Blog Item End ***** -->
			</div>
		</div>
	</section> --}}


    {{-- <script>
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				items: 1, // Number of items to display
				loop: true, // Enable infinite loop
				autoplay: true, // Enable autoplay
				autoplayTimeout: 100, // Autoplay interval in milliseconds (1 second)
				autoplayHoverPause: false, // Do not pause autoplay on mouse hover
				animateOut: 'fadeOutRight', // Animation for slide out
				animateIn: 'fadeInLeft', // Animation for slide in
				smartSpeed: 100, // Animation speed
			});
		});
	</script> --}} -
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(".owl-carousel").owlCarousel({

            // items: 1, // Number of items to display
            loop: true, // Enable infinite loop
            autoplay: true, // Enable autoplay
            autoplayTimeout: 3000, // Autoplay interval in milliseconds (1 second)
            // autoplayHoverPause: false, // Do not pause autoplay on mouse hover
            // animateOut: 'fadeOutRight', // Animation for slide out
            // animateIn: 'fadeInLeft', // Animation for slide in
            // smartSpeed: 100,
        })
    </script>
@endsection
