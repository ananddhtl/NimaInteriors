@extends('welcome')
@section('title','login :: Nimainteriors.com')

@section('content')


<section class="page">
<div class="customer-container container-fluid">
    <div class="row row-height">
        {{-- <div class="col-lg-6 content-left-bg-color p-0 left-login">
            <div class="content-left-wrapper with_gradient">
               
                <div id="social">
                    <ul>
                        <li><a href="#0"><i class="social_facebook"></i></a></li>
                        <li><a href="#0"><i class="social_twitter"></i></a></li>
                        <li><a href="#0"><i class="social_instagram"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->
                <div>
                    <h1>Betler Login</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
            </div>
        </div> --}}
        <div class=" d-flex flex-column content-center">
            <div class="container my-auto py-5">
                <div class="row">
                    <div class="col-lg-9 col-xl-7 mx-auto position-relative">
                        <form action="{{ route('login') }}" class="input_style_1" method="post">
                            @csrf
                        
                            <div class="login-social d-flex">
                                <a href="#0" class="social_bt facebook m-2">Login with Facebook</a>
                                <a href="#0" class="social_bt google m-2">Login with Google</a>
                            </div>
                        
                            <div class="divider"><span>Or</span></div>
                        
                            @if ($errors->has('email') || $errors->has('password'))
                                <div class="alert alert-danger" role="alert">
                                    Incorrect email or password.
                                </div>
                            @endif
                        
                            <div class="form-group">
                                <label for="email_address">Email Address</label>
                                <input type="email" name="email" id="email_address" class="form-control">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="mb-3">
                                <div class="float-start">
                                    <label class="container_check">Remember Me
                                        <input type="checkbox" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="float-end">
                                    <a class="ml-2" id="forgot" href="{{route('forgetpassword')}}">Forgot Password?</a>
                                </div>
                            </div>
                        
                            <button type="submit" class="btn_1 full-width">Login</button>
                        </form>
                        
                        
                        <p class="text-center mt-3 mb-0">Don't have an account? <a href="/customer/register">Sign Up</a></p>
                    
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- /row -->
</div>
</section>
@endsection
<!-- /container -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.js"></script>
<script src="js/common_func.js"></script>
