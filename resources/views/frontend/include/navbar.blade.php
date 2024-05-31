<div class="preloader-wrapper">
    <div class="loader"></div>
</div>
<style>
    .whole-container, .container-show {
    display: none;
}
    .left-bar{
        gap:15px;
        padding:15px;
    }
    .left-bar i{
        color: #606F060;
    }
    .left-bar a{
        color: #606060;
    }
    .right-bar{
        display: flex;
        gap:20px;
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
		
	}
    .contact-us-link{
        display:flex;
        gap:15px;
    }
   .sp-i{
        display: flex;
        gap:5px;
        align-items: center
    }
    .header-area .main-nav .nav li .c-light{
        color: rgb(152, 152, 152);
        
    }
    .header-area .main-nav .nav li .c-light:hover{
        border-bottom: none;
        
    }
    .header-area .main-nav .nav li .s-form{
        /* position: absolute; */
    }
    .header-area .main-nav .form-inline{
       position: absolute;
       margin-top: 200px;
    width: 50%;
    right: 0;
    }
    .header-area .main-nav .nav .form-inline .form-control{
       height: 40px;
    }
    #search-form {
            display: none; /* Initially hidden */
            
        }
	.contact-us-top-nav{
		
		margin-left: 5px;
	}
    .whole-container{
        border-bottom:  1px solid rgb(236, 236, 236);
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
    .vertical-line {
    width: 1px;
    height: 40px;
    background-color: black; /* Change color here if needed */
  }
    @media (max-width: 991px) {
        .container-show{
        display: block;
        text-align: center
    }
    .header-area .container-show{
        border-bottom: 1px solid rgb(236, 236, 236);
    }
    .header-area .container-show a,
    .header-area .container-show i{
        color:#595959;
        font-size: 12px;
        font-weight: 500;
        background:transparent;
    }
    .header-area .container-show .icon-container{
        text-align: center;
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
                        <p class="contact-us-top-nav ml-3 underline-with-gap"><a href="tel:+3232968266">+32 3 296 82 66</a></p>
                  
                        </div>
                        
                    </div>
                  
                </div>
                
                <div class=" right-bar">
                   {{-- drop down for langauge option --}}
                 
                  
       
                
                    <div class="header-account">
                        <div class="myaccount d-flex">
                            <div class="tongle" id="account-toggler">
                                <i class="fa fa-user"></i>
                                @if (auth()->check())
                                    <span>{{ auth()->user()->fullname }}</span>
                                @else
                                    <span>Account</span>
                                    <i class="fa fa-angle-down"></i>
                                @endif
                            </div>
                            <div class="customer-ct content" id="account-dropdown">
                                <ul class="links">
                                    @if (auth()->check())
                                        <li class="first">
                                            <a class="top-link-myaccount" title="My Account" href="/customer/account">My Account</a>
                                        </li>
                                        <li>
                                            <a class="top-link-wishlist" title="My Wishlist" href="#">My Wishlist</a>
                                        </li>
                                        <li>
                                            <a class="top-link-checkout" title="Checkout" href="#">Order</a>
                                        </li>
                                        <li>
                                            <a class="top-link-profile" title="Profile" href="#">Profile</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit">Logout</button>
                                            </form>
                                        </li>
                                    @else
                                        <li class="last">
                                            <a class="top-link-login" title="Log In" href="{{ route('login') }}">Login</a>
                                        </li>
                                        <li class="last">
                                            <a class="top-link-register" title="Register" href="">Register</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="wishlist">
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="c-cart">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mysetting">
                        <div class="tongle">
                            <a data-lang="be" class="language-link" href="#">
                                <img alt="" src="{{ asset('frontend/assets/images/photos/flag/Belgium.png') }}">
                                <span>{{$current_locale}}</span>
                            </a>
                        </div>
                        <div class="">
                            <div class="language-switcher">
                                <!-- New language switcher integration -->
                                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                                    @foreach($available_locales as $locale_name => $available_locale)
                                        @if($available_locale === $current_locale)
                                            <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>
                                        @else
                                            <a class="ml-1 underline ml-2 mr-2" href="language/{{ $available_locale }}">
                                                <span>{{ $locale_name }}</span>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- End of new language switcher integration -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-show bg-gray1 pa-4 ">
        <div class="h-top align-items-center  p-2">
            <div class="h-left d-flex justify-content-center">
                <div class="icon-container">
                    <i class="fa fa-info-circle " ></i>
                </div>
                
                <span class="p-1"></span>
                <p style="margin: 0;"><a href="/contact">Enkel open op afspraak </a></p>
                         
            </div>
           <div class="h-right">
           
           </div>
        </div>
    </div>
    
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
                            <li><a href="/" id="home-link">{{ __('Home') }}</a></li>
                            <li><a href="/diensten" id="project-link">Projecten</a></li>
                            <li><a href="/blog" id="blog-link">Blogs</a></li>
                           
                            <!-- Other navigation links -->
                            <li><a class="" href="/contact" id="contact-link">Contact</a></li>
                           
                            {{-- <div class="vertical-line"></div> --}}
                            <li><a href="/shop" id="shop-link">Webshop</a></li>
                            <li><a href="#" id="search-link" class="s-form c-light">Zoeken <i class="fa fa-search"></i></a></li>
                                
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
                                    {{-- <div class="mysetting">
                                        <div class="tongle">
                                            <a  data-lang="be" class="language-link" href="#">
                                                <img alt="" src="{{ asset('frontend/assets/images/photos/flag/Belgium.png') }}">
                                                <span>BE</span>
                                            </a>
                                        </div>
                                        <div class="">
                                            <div class="language-switcher">
                                                <ul id="select-language" class="submenu-lan">
                                                       
                                                        <li>
                                                            <a  data-lang="be" class="language-link" href="#">
                                                                <img alt="" src="{{ asset('frontend/assets/images/photos/flag/Belgium.png') }}">
                                                                <span>BE</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a  href="#"  data-lang="en" class="language-link">
                                                                <img alt="" src="{{ asset('frontend/assets/images/photos/flag/english.png') }}">
                                                            <span>EN</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                            
                                            </div>
                                        </div>
                                    </div>  --}}
                                </div>
                            </li>
                            <li>
                               
                            </li>
                        </ul>
                        <form id="search-form" class="form-inline">
                            <input type="text" id="search" placeholder="Search..." class="form-control" autocomplete="off">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                      
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
					</div>
                    
                    
                </nav>
            </div>
        </div>
    </div>
</header>
