<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="matx no-js"> <!--<![endif]-->
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

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700italic,700,500italic,900' rel='stylesheet' type='text/css'>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{secure_asset('/libs/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/mdl/material.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/owl-carousel/owl.theme.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/owl-carousel/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/sweetalert/sweet-alert.min.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/libs/sweetalert/ie9.css')}}">

        <link rel="stylesheet" href="{{secure_asset('/css/common.css')}}">
        <link rel="stylesheet" href="{{secure_asset('/css/main.css')}}">
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

        <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/revolution/fonts/font-awesome/css/font-awesome.min.css')}}">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/revolution/css/settings.css')}}">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/revolution/css/layers.css')}}">

        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="{{secure_asset('/libs/revolution/css/navigation.css')}}">

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

        <!-- Header Scripts -->
        <!--[if lt IE 9]>
            <script src="{{secure_asset('/js/vendor/html5shiv.js')}}"></script>
        <![endif]-->
        @include('Frontend.partials.analytics')
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5RRWLFS');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Loader -->
        <div id="loader" class="loader-wrapper">
            <div class="matx-preloader"></div>
        </div>

        <!-- Overlay display while mobile navigation will open  -->
        <div class="nav-overlay-bg"></div>

        <!-- Header -->
            @include('Frontend.partials.header')
        <!-- /Header -->

            @yield('content')

        @include('Frontend.partials.footer')
        <!-- end main footer -->


        <!-- back to top button -->
        <button id="backToTop" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect btn-highlight back-to-top shade-on hide-bottom">
            <i class="zmdi zmdi-chevron-down"></i>
        </button>

        <!-- footer script start  -->
        <script>window.jQuery || document.write('<script type="text/javascript" src="{{secure_asset('/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
       <script>
           $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       </script>{{-- 
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=YOUR_GOOGLE_MAP_API_KEY"></script> --}}
     {{--    <script type="text/javascript" src="//platform.twitter.com/widgets.js')}}"></script> --}}
        <script type="text/javascript" src="{{secure_asset('/libs/mdl/material.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/js/all-plugins.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/js/common-plugins.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/owl-carousel/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/sweetalert/sweet-alert.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/jwplayer/jwplayer.js')}}"></script>


                    <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/libs/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/js/common.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/js/all-components.js')}}"></script>
        <script type="text/javascript" src="{{secure_asset('/js/main.js')}}"></script>
      <script type="text/javascript">
            window._mfq = window._mfq || [];
            (function() {
                var mf = document.createElement("script");
                mf.type = "text/javascript"; mf.async = true;
                mf.src = "//cdn.mouseflow.com/projects/6a8c6fe0-bcd5-4e36-8853-63830f6f8a98.js";
                document.getElementsByTagName("head")[0].appendChild(mf);
            })();
        </script>
        <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RRWLFS"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->


            @yield('scripts')
                </body>
</html>
