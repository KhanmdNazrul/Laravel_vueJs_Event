<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home Three || envens || envens HTML 5 Template </title>
    <!-- favicons Icons -->
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
    <link rel="stylesheet" href="{{asset('vendors/reey-font/stylesheet.css.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('css/envens.css')}}" />
    <link rel="stylesheet" href="{{asset('css/envens-responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('css/color-3.css')}}" />

    @yield('css')
</head>

<body>

    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('frontend.layouts.attendee_header')
        
        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        <!--Site Footer Two Start-->
        <footer class="site-footer-two">
            <div class="site-footer-two__bg"
                style="background-image: url(images/backgrounds/site-footer-two-bg.jpg);"></div>
            <div class="site-footer-two__shape-bg-1"
                style="background-image: url(images/shapes/site-footer-two-shape-bg-1.png);"></div>
            <div class="site-footer-two__top">
                <div class="site-footer-two__top-shape-2 float-bob-x">
                    <img src="{{asset('images/shapes/site-footer-two-top-shape-2.png')}}" alt="">
                </div>
                <div class="site-footer-two__top-shape-3 float-bob-y">
                    <img src="{{asset('images/shapes/site-footer-two-top-shape-3.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="site-footer-two__top-inner">
                        <div class="site-footer-two__top-shape-1 img-bounce">
                            <img src="{{asset('images/shapes/site-footer-two-top-shape-1.png')}}" alt="">
                        </div>
                        <div class="site-footer-two__top-icon-box">
                            <div class="site-footer-two__top-icon">
                                <span class="icon-placeholder"></span>
                            </div>
                            <div class="site-footer-two__top-icon-content">
                                <p>Our Location</p>
                                <h5>80 Kakrail,Dhaka Bangladesh</h5>
                            </div>
                        </div>
                        <div class="site-footer-two__logo">
                            <a href="index.html"><img src="{{asset('images/resources/site-footer-logo-3.png')}}" alt=""></a>
                        </div>
                        <div class="site-footer-two__top-icon-box">
                            <div class="site-footer-two__top-icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <div class="site-footer-two__top-icon-content">
                                <p>Make a Call</p>
                                <h5><a href="tel:2334567908">(+88) 0184 520 7869</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-two__middle">
                <div class="container">
                    <div class="site-footer-two__middle-inner">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget-two__column footer-widget-two__about">
                                    <div class="footer-widget-two__title-box">
                                        <h3 class="footer-widget-two__title">About Us</h3>
                                    </div>
                                    <div class="footer-widget-two__link-list-box">
                                        <ul class="footer-widget-two__link-list list-unstyled">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="about.html">Custom Widget</a></li>
                                            <li><a href="about.html">Short Codes</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="about.html">Short Codes</a></li>
                                        </ul>
                                        <ul
                                            class="footer-widget-two__link-list footer-widget-two__link-list--two list-unstyled">
                                            <li><a href="gallery.html">Our Projects</a></li>
                                            <li><a href="about.html">Terms & Conditions</a></li>
                                            <li><a href="pricing.html">Pricing Table</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget-two__column footer-widget-two__link">
                                    <div class="footer-widget-two__title-box">
                                        <h3 class="footer-widget-two__title">Quick Link</h3>
                                    </div>
                                    <ul class="footer-widget-two__link-list list-unstyled">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">Privacy Policy</a></li>
                                        <li><a href="speaker.html">Terms</a></li>
                                        <li><a href="sponsors.html">Our Awards</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget-two__column footer-widget-two__gallery">
                                    <div class="footer-widget-two__title-box">
                                        <h3 class="footer-widget-two__title">Instagram</h3>
                                    </div>
                                    <ul class="footer-widget-two__gallery-list list-unstyled clearfix">
                                        <li>
                                            <div class="footer-widget-two__gallery-img">
                                                <img src="{{asset('images/gallery/footer-widget-two-gallery-1-1.jpg')}}"
                                                    alt="">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget-two__gallery-img">
                                                <img src="{{asset('images/gallery/footer-widget-two-gallery-1-2.jpg')}}"
                                                    alt="">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget-two__gallery-img">
                                                <img src="{{asset('images/gallery/footer-widget-two-gallery-1-3.jpg')}}"
                                                    alt="">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget-two__gallery-img">
                                                <img src="{{asset('images/gallery/footer-widget-two-gallery-1-4.jpg')}}"
                                                    alt="">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget-two__gallery-img">
                                                <img src="{{asset('images/gallery/footer-widget-two-gallery-1-5.jpg')}}"
                                                    alt="">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget-two__gallery-img">
                                                <img src="{{asset('images/gallery/footer-widget-two-gallery-1-6.jpg')}}"
                                                    alt="">
                                                <a href="#"><span class="icon-link"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget-two__column footer-widget-two__social">
                                    <div class="footer-widget-two__title-box">
                                        <h3 class="footer-widget-two__title">Follow Us</h3>
                                    </div>
                                    <ul class="footer-widget-two__link-list list-unstyled">
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Linkedin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-two__bottom">
                <div class="container">
                    <div class="site-footer-two__bottom-inner">
                        <p class="site-footer-two__bottom-text">Copyright © 2024 Eventee Supreme, all rights reserved.</p>
                        <ul class="list-unstyled site-footer-two__botom-menu">
                            <li><a href="about.html">Privacy</a></li>
                            <li><a href="about.html">Terms & Conditions</a></li>
                            <li><a href="sponsors.html">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer Two End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{asset('images/resources/logo-3.png')}}" width="150"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@envens.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

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

    @yield('js')
</body>

</html>