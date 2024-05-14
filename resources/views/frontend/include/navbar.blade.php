<div class="preloader-wrapper">
    <div class="loader"></div>
</div>
<style>
    .left-bar{
        gap:15px;
    }
    .left-bar i{
        color: #606060;
    }
    .left-bar a{
        color: #606060;
    }
    .right-bar i{
        color: #606060;
    }
    .right-bar a{
        color: #606060;
    }
    .line{
        width: 100%;
       
    }
	.top-bar{
		font-size:12px;
		padding:10px;
	}
    .contact-us-link{
        display:flex;
        gap:15px;
    }
   .sp-i{
        display: flex;
        gap:1px;
        align-items: center
    }
	.contact-us-top-nav{
		
		margin-left: 5px;
	}
    .container-show{
        display: none;
        text-decoration: none;
        
    }
    .element-with-border {
  position: relative; /* Required for positioning the pseudo-element */
}

.element-with-border::after {
  content: '';
  position: absolute;
  top: -1px; /* Adjust as needed to position the pseudo-element */
  left: -1px; /* Adjust as needed to position the pseudo-element */
  right: -1px; /* Adjust as needed to position the pseudo-element */
  bottom: -1px; /* Adjust as needed to position the pseudo-element */
  border: 0.1px solid #e9e8e8; /* This creates a very fine line border */
  pointer-events: none; /* Ensure the pseudo-element does not interfere with pointer events */
}
.container-top-header{
    margin: 0 40px;
}
.underline-with-gap {
        display: inline-block;
        padding-bottom: 1px; /* Adjust as needed */
        border-bottom: 1px solid #b7b7b7; /* Adjust thickness and color as needed */
        text-decoration: none; /* Remove default underline */
    }
    @media (max-width: 991px) {
        .container-show{
        display: block;
        text-align: center
    }
    .header-area .container-show a{
        color:rgb(54, 54, 54);
        font-size: 12px;
        font-weight: 500;
    }
    }
</style>
<header class="header-area">

    <div class="whole-container bg-gray1 pa-4">
        <div class="container-top-header">
            <div class="top-bar d-flex justify-content-between align-items-center">

                <div class="left-bar d-flex">
                    <div class="social-sites d-flex ">
                        <p><a href="https://www.facebook.com/nimainterieurs/" class="site-bg" target="_blank"><i class="fa fa-facebook">&nbsp; </i></a></p>
                        <p style="margin-left: 3px;"><a href="https://www.pinterest.com/nimainteriors/" class="site-bg" target="_blank"><i class="fa fa-pinterest">&nbsp; </i></a></p>
                        <p style="margin-left: 3px;"><a href="https://www.instagram.com/nima.interiors/" class="site-bg" target="_blank"><i class="fa fa-instagram">&nbsp;&nbsp;  </i></a></p>
                        <p>|</p>
                    </div>
                    <div class="sp-i">
                        <i class="fa fa-info-circle"></i>
                        <p style=" "><a href="/contact">Enkel open op afspraak </a></p>
                      
                    </div>
                    <div class="contact-us-link d-flex align-items-center">
                        <div class="sp-i">
                            <i class="fa fa-envelope"></i>
                        <p class="contact-us-top-nav ml-3 underline-with-gap"><a href="mailto:info@nimainteriors.com">info@nimainteriors.com  </a></p>
                        
                        </div>
                        <div class="sp-i">
                            <i class="fa fa-phone"></i>
                        <p class="contact-us-top-nav ml-3 underline-with-gap"><a href=""> +32 3 296 82 66</a></p>
                  
                        </div>
                    </div>
                  
                </div>
                
                <div class="right-bar d-flex">
                   {{-- drop down for langauge option --}}
                    <p style="margin-left: 5px;"><a href="#"><i
                                class=""></i>&nbsp; NL</a></p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-show bg-gray1 pa-4">
        <div class="d-flex align-items-center justify-content-center p-1">
            <p class=""><a href="mailto:info@nimainteriors.com">  <i
                class="fa fa-envelope"></i>info@nimainteriors.com  </a></p>
        </div>
    </div>
    <div class="line element-with-border"></div>
    <div class="container-top-header">
        <div class="row">
            <div class="col-12 ">
                <nav style=""class="main-nav ">
					<div class="main-flex">
						<a href="/" class="logo">
							<img src="{{ asset('frontend/assets/images/nima_logo.png') }}" alt="nima"
							 />
						</a>
	
						<ul class="nav">
                            <li><a href="/" id="home-link">Startpagina</a></li>
                            <li><a href="/diensten" id="project-link">Projecten</a></li>
                            <li><a href="/blog" id="blog-link">Blogs</a></li>
                           
                            <!-- Other navigation links -->
                            <li><a class="" href="/contactus" id="contact-link">Contact</a></li>
                            
                            <li><a href="/shop" id="shop-link">Winkelwagen <i class="fa fa-shopping-basket"></i></a></li>
                            <li>
                                <div class="contact-us-link ham-contact-us">
                                    <div class="sp-i">
                                        <i class="fa fa-envelope"></i>
                                    <p class="contact-us-top-nav ml-3 "><a href="mailto:info@nimainteriors.com">info@nimainteriors.com  </a></p>
                                    
                                    </div>
                                    <div class="sp-i">
                                        <i class="fa fa-phone"></i>
                                    <p class="contact-us-top-nav ml-3 "><a href=""> +32 3 296 82 66</a></p>
                              
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                      
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
					</div>
                    
                    
                </nav>
            </div>
        </div>
    </div>
</header>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get the current page URL
    var currentUrl = window.location.pathname;

    // Remove leading slash for comparison
    currentUrl = currentUrl.replace(/^\/+|\/+$/g, '');

    // Get all navigation links
    var navLinks = document.querySelectorAll('.nav a');

    // Loop through each navigation link
    navLinks.forEach(function(link) {
        // Get the href attribute value and remove leading slash for comparison
        var href = link.getAttribute('href').replace(/^\/+|\/+$/g, '');

        // Add the 'active' class to the link if its href matches the current page URL
        if (href === currentUrl) {
            link.classList.add('active');
        }
    });
    var contactLink = document.getElementById('contact-link');
        if (contactLink && currentUrl === 'contactus') {
            contactLink.classList.add('active');
        }
});

</script>

