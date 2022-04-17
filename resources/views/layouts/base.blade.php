<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Second-hand Car E-showroom </title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}"  rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/prettyphoto/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl-carousel2/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl-carousel2/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('assets/css/theme.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-green-1.css')}}" rel="stylesheet" id="theme-config-link">


    <!-- Head Libs -->
    <script src="{{ asset('assets/plugins/modernizr.custom.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->

    @livewireStyles

</head>
@stack('style') 

<body id="home" class="wide">
<!-- PRELOADER -->
<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">

 

    <!-- Header top bar -->
    <div class="top-bar">
        <div class="container">
           {{----<a href=" {{ route('CarAds') }}" > Car Ads</a>----}} 
            
            <div class="top-bar-left">
                @if(Route::has('login'))
                    @auth
                        <ul class="list-inline">
                            <li><a href=""><i class="fa fa-envelope"></i> <span>showroom2022abc@gmail.com</span></a></li>
                            <li><a href="{{ route('home') }}"> <span>Home</span></a></li>

                        </ul>
                    @else
                        <ul class="list-inline">
                            <li class="icon-user"><a href="{{ route('login') }}"><img src="assets/img/icon-1.png" alt=""/> <span>Login</span></a></li>
                            <li class="icon-form"><a href="{{ route('register') }}"><img src="assets/img/icon-2.png" alt=""/> <span class="colored">Sign Up</span></span></a></li>
                            <li><a href=""><i class="fa fa-envelope"></i> <span>showroom2022abc@gmail.com</span></a></li>
                        </ul>
                    @endif
                @endif
            </div>
            <div class="top-bar-right">
                <ul class="list-inline">
                    <li><a href="{{ route('search') }}"> <span>Search car</span></a></li>

                    <li class="dropdown flags">
                      {{----   
                         <a href="{{ route('Adscar') }}"> Ads sCart </a>
                        --}} 
                       
                        @if(Route::has('login'))
                            @auth 
                                @if(Auth::user()->utype == 'ADM')
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Admin : ({{ Auth::user()->name }})  <i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="{{ route('admin.ManageMyAds') }}">All Ads</a></li>
                                        <li><a href="{{ route('profile.show') }}">Profile </a></li>
                                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logouut </a></li>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </ul>
                                @elseif (Auth::user()->utype == 'USER')
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> User : ({{ Auth::user()->name }})  <i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="{{ route('user.ManageMyAds') }}">My Ads </a></li>
                                        <li><a href="{{ route('user.Messeges') }}">Messages </a></li>
                                        <li><a href="{{ route('user.Reviewes') }}">My deals </a></li>
                                        <li><a href="{{ route('profile.show') }}">Profile </a></li>
                                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logouut </a></li>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </ul>
                                @endif
                            @endauth
                        @endif
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <!-- /Header top bar -->

    <!-- HEADER -->
    <header class="header">
        <div class="header-wrapper">
            <div class="container">

                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png')}}" alt="logo"/></a>
                </div>
                <!-- /Logo -->

            
            </div>
        </div>
        
    </header>
    <!-- /HEADER -->

	{{ $slot }}

	{{---@livewire('footer-component');----}}
	 <!-- FOOTER -->
	 <footer class="footer">
  
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="copyright text-center">Copyright 2022 Secondhand Car E-showroom |   All Rights Reserved   |   Designed By Sayed Ahmed Falah Jawad Hashem</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->
<!-- JS Global -->
<script src="{{ asset('assets/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/plugins/superfish/js/superfish.min.js')}}"></script>
<script src="{{ asset('assets/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('assets/plugins/owl-carousel2/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.sticky.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.easing.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery.smoothscroll.min.js')}}"></script>
<script src="{{ asset('assets/plugins/smooth-scrollbar.min.js')}}"></script>

<!-- JS Page Level -->
<script src="{{ asset('assets/js/theme.js')}}"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{ asset('assets/plugins/jquery.cookie.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/hj792k117l0inekz8p0lwczrmdvvlgz7lf0vx3dooh2q937o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous"></script>
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>

<!--<![endif]-->
<script>
$('.dropdown-toggle').dropdown()
	</script>
	@livewireScripts
    <script>
		window.livewire.on('fileUploaded',()=>{
			$('#form-upload')[0].reset();
		});

	</script>
	@stack('scripts') 
	</body>
	</html>