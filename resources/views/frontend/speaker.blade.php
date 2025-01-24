@extends('frontend.layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/animate/animate.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/animate/custom-animate.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/jarallax/jarallax.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/odometer/odometer.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/swiper/swiper.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/envens-icons/style.css')}}">
<link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/nice-select/nice-select.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/timepicker/timePicker.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/reey-font/stylesheet.css')}}" />


<link rel="stylesheet" href="{{asset('css/envens.css')}}" />
<link rel="stylesheet" href="{{asset('css/envens-responsive.css')}}" />
<link rel="stylesheet" href="{{asset('css/color-2.css')}}" />
@endsection

@section('js')
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
@endsection

@section('content')


<section class="page-header">

    <div class="page-header__bg" style="background-image: url('images/backgrounds/pagetheme.jpg');">
    </div>
    <div class="page-header__shape-1">
        <img src="{{asset('images/shapes/page-header-shape-1.png')}}" alt="">
    </div>
    <div class="page-header__shape-2">
        <img src="{{asset('images/shapes/page-header-shape-2.png')}}" alt="">
    </div>
    <div class="page-header__shape-3">
        <img src="{{asset('images/shapes/page-header-shape-3.png')}}" alt="">
    </div>

    <div class="container">
        <div class="page-header__inner">
            <h2>Speaker Single</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Speaker Single</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="speaker-single">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="speaker-single__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline section-title__tagline--two"><span>//</span> Team
                                        Info</p>
                                </div>
                                <h2 class="section-title__title">Our Famous Member's <span>Information</span></h2>
                            </div>
                            <div class="speaker-single__info-box">
                               
                                <ul class="speaker-single__info-list list-unstyled">
                                    
                                <li><p>We are unable to share speaker's personal information due to secured privacy!</p></li>
                                </ul>
                            </div>
                            <div class="speaker-single__contact-us">
                                <a href="#" class="#">Contact Us</a>
                                <a href="#" class="speaker-single__btn-arrow"><span class="icon-right-up"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="speaker-single__right">
                            <div class="speaker-single__img-box">
                                <div class="speaker-single__img">
                                    <img src="{{asset($speaker->photo)}}" alt="">
                                </div>
                                <div class="speaker-single__img-shape"></div>
                                <div class="speaker-single__share-and-social">
                                    <div class="speaker-single__share">
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                    </div>
                                    <div class="speaker-single__social">
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                        <a href="#"><span class="fas fa-wifi"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="speaker-single__content">
                                <h3><a href="#">{{$speaker->name}}</a></h3>
                                <p>{{$speaker->profession}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="speaker-single__bottom">
                    <div class="speaker-bottom__img-and-content">
                        <div class="speaker-bottom__img">
                            <img src="assets/images/team/speaker-single-bottom-img.jpg" alt="">
                            <div class="speaker-bottom__social">
                                <a href="#"><span class="fab fa-youtube"></span></a>
                                <a href="#"><span class="fas fa-wifi"></span></a>
                            </div>
                        </div>
                        <div class="speaker-bottom__content">
                            
                            <h3 class="speaker-bottom__title">Speaker Details: </h3>
                            <p class="speaker-bottom__text">{{$speaker->details}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection