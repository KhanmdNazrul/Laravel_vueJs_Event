<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>


    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('images/favicons/site.webmanifest')}}" />
    <meta name="description" content="envens HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/envens-icons/style.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}" />

    

    <link rel="stylesheet" href="{{asset('vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/nice-select/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/timepicker/timePicker.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/reey-font/stylesheet.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('css/envens.css')}}" />
    <link rel="stylesheet" href="{{asset('css/envens-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('css/color-3.css')}}" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">


    <div class="page-wrapper">
        

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    
        @inertia
       
       
    </div>





    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-arrow-up"></i></a>


    <script src="{{asset('vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('vendors/wow/wow.js')}}"></script>
    <script src="{{asset('vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('vendors/jquery.circle-type/jquery.circleType.js')}}"></script>
    <script src="{{asset('vendors/jquery.circle-type/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('vendors/nice-select/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('vendors/marque/marquee.min.js')}}"></script>
    <!-- template js -->
    <script src="{{asset('js/envens.js')}}"></script>

</body>

</html>