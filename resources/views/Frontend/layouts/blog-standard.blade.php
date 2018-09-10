<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Apex Triangle - A Software Development Agency </title>
        <meta name="description" content="Apex Triangle , if you can dream it we can build it.">
        <meta name="copyright" content="Apex Trangle is a registered trademark og Apex Trangle Co.">
        <meta name="keywords" content="web development agency, nigerian web development agency, build websites and mobile apps, software development agency, build mobile apps, build websites with php, build websites with javascript, Build a better website, Cloud computing consultants, biometrics website, it training">
        <meta name="title" content="web/mobile development agency,">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{secure_asset('img//logo/57x57.png')}}">

      <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,400italic,500italic' rel='stylesheet' type='text/css'>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{secure_asset('libs/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/mdl/material.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/owl-carousel/owl.theme.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/owl-carousel/owl.transitions.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{secure_asset('/css/common.css')}}"> 
        <link rel="stylesheet" href="{{secure_asset('/css/blog.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/css/responsive.css')}}">

        <!-- Other Color Schemes -->
         {{-- <link rel="stylesheet" href="{{secure_asset('/css/color-cyan.css')}}">  --}}
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-indigo.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-deep-purple.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-pink.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-blue.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-green.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-deep-orange.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-blue-grey.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-teal.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-purple.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{secure_asset('/css/color-light-green.css')}}"> -->

        <!-- Header Scripts -->
        <!--[if lt IE 9]>
            <script src="{{secure_asset('/js/vendor/html5shiv.js')}}"></script>
        <![endif]-->
      
        @include('Frontend.partials.analytics')

    </head>
    <body class="blog-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- loder -->
        <div id="loader" class="loader-wrapper">
            <div class="matx-preloader"></div>
        </div>

        <!-- Overlay display while mobile navigation will open  -->
        <div class="nav-overlay-bg"></div>

        <!-- start banner -->
       

            

           
        <!-- end banner -->
        
       @yield('content')

        <!-- start main footer -->
        <footer class="main-footer">
            <section class="footer-top">
                <div class="section">
                    <div class="section-common-space">
                        <div class="container">
                            <div class="row">
                                <div class="text-center ft-content-start">
                                    <a href="/" class="logo footer-logo wow fadeIn" data-wow-duration="1s">
                                         <img src="/img/logo/72x72.png" alt="logo">
                                    </a>
                                    <ul class="clearfix social footer-social hover-round">
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           <section class="footer-bottom">
                <div class="text-center">
                    <p>Apex Triangle &copy; 2018. ALL RIGHT RESERVED</p>
                </div>
            </section>
        </footer>
        <!-- end main footer -->


        <!-- back to top button -->
        <button id="backToTop" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect btn-highlight back-to-top hide-bottom">
            <i class="zmdi zmdi-chevron-up"></i>
        </button>
      
       <script type="text/javascript" src="{{secure_asset('/js/vendor/jquery-1.10.2.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/mdl/material.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/js/common-plugins.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/owl-carousel/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/jwplayer/jwplayer.js')}}"></script>

        <script type="text/javascript" src="{{secure_asset('/js/common.js')}}"></script>
       <script src="{{ secure_asset('js/share.js') }}"></script>
        <script type="text/javascript" src="{{secure_asset('/js/blog.js')}}"></script>
    </body>
</html>