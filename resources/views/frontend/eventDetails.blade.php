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

<!-- template styles -->
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
    <div class="page-header__bg" style="background-image: url('images/backgrounds/page-header-bg.jpg');">
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
            <h2>Event Details</h2>
        </div>
    </div>
</section>
<!--Countdown One Start-->
<section class="coming-soon-page full-height">
    <div class="coming-soon-page__bg"
        style="background-image: url(assets/images/backgrounds/coming-soon-page-bg.jpg);"></div>
    <div class="coming-soon-page__content">
        <div class="inner">
            <div class="big-title">Events are only</div>
            <div class="timer-box clearfix">
                <div class="countdown-timer">
                    <div class="default-coundown">
                        <div class="box">
                            <div class="countdown coming-soon-countdown" data-countdown-time="{{$event->start_date}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Countdown One End-->

<!--Speaker Single Start-->
<section class="speaker-single">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="speaker-single__left">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">

                        </div>
                        <h2 class="section-title__title">{{$event->title}}</h2>
                    </div>
                    <div class="speaker-single__info-box">
                        <ul class="speaker-single__info-list list-unstyled">
                            <li>
                                <p>Organiser - {{$event->organiser->name}}</p>
                            </li>
                            <li>
                                <p>Speaker - {{$event->speaker->name}}</p>
                            </li>
                            <li>
                                <p>Date - {{$event->start_date}}</p>
                            </li>
                            <li>
                                <p>Address: {{$event->address}} {{$event->city->name}}</p>
                            </li>
</ul>
                        
                    </div>
                   
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="speaker-single__right">
                    <div class="speaker-single__img-box">
                        <div class="speaker-single__img">
                            <img src="{{asset($event->image)}}" alt="">
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
                        <h3>Total Tickets <span>{{$event->num_tickets}}</span></h3>
                        <p>Ticket Price: <span>{{$event->unit_price}}</span></p>
                    </div>
                </div><br>
            <h2>Remainning Tickets: <span style="color: blue;">{{$total}}</span> </h2><br>

            <div class="events-three__btn-box">
                                        <a href="{{route('attendee.login')}}" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Book Seat</a>
                                    </div>

            </div>
        </div>
        <div class="speaker-single__bottom">
            <div class="speaker-bottom__img-and-content">
                <div class="speaker-bottom__img">
                    <img src="assets/images/team/speaker-single-bottom-img.jpg" alt="">

                </div>
<!-- booking button -->
               
                <div class="speaker-bottom__content">

                    <h5 style="color: blue;" class="speaker-bottom__text">
                        Features <br>{{$event->description}}</h45>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Speaker Single End-->


@endsection