@extends('frontend.layouts.eapp')

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

<!--Page Header Start-->
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
            <h2>About Us</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Two Start-->
<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__left">
                    <div class="about-two__img"
                        style="background-image: url(images/resources/about-two-img-2.png);"></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="about-two__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline section-title__tagline--two"><span>//</span> About
                                Company</p>
                        </div>
                        <h2 class="section-title__title">International Business and <span>Cultural Events Management Company</span></h2>
                    </div>
                    <p class="about-two__text">There are many variations of passages of Lorem Ipsum availa<br>
                        ble, but the majority have suffered alteration in some form, by injected<br> humour, or
                        randomised words.</p>
                    <div class="about-two__solution-box">
                        <div class="about-two__solution-single">
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p class="about-two__solition-text">Solution for small &
                                <br> large events
                            </p>
                        </div>
                        <div class="about-two__solution-single">
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p class="about-two__solition-text">Solution for taking hassle &
                                <br> large pain on making event
                            </p>
                        </div>
                    </div>
                    <ul class="about-two__points list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>It has survived not only five centuries</p>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check-1"></span>
                            </div>
                            <p>Lorem Ipsum has been the industry standard dummy text</p>
                        </li>
                    </ul>
                    <div class="about-two__btn-and-client-info">
                        <div class="about-two__btn-box">
                            <a href="about.html" class="about-two__btn thm-btn-two"><span
                                    class="fas fa-arrow-circle-right"></span>Discover more</a>
                        </div>
                        <div class="about-two__client-info">
                            <div class="about-two__client-img">
                                <img src="{{asset($admin->photo)}}" alt="">
                            </div>
                            <div class="content">
                                <h4>Nazrul Khan</h4>
                                <p>CEO of Eventee Supreme</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Two End-->

<!--Countdown One Start-->

<!--Countdown One End-->

<!--Team Two Start-->
<section class="team-two">
    <div class="team-two__bg" style="background-image: url(images/backgrounds/team-two-bg.jpg);"></div>
    <div class="container">
        <div class="team-two__top">
            <div class="section-title text-left">
                <div class="section-title__tagline-box">
                    <p class="section-title__tagline section-title__tagline--two"><span>//</span> About The
                        Event</p>
                </div>
                <h2 class="section-title__title">Our Creative Event <br><span>Responsible Personnel</span></h2>
            </div>
            <p class="team-two__text">Whether designing a cozy apartment for a young couple or<br>
                luxurious penthouse for a discerning client, the goal remains the
                <br>same: to craft environments that inspire
            </p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="team-two__single">
                    <div class="team-two__img">
                        <img src="{{asset($admin->photo)}}" alt="">
                    </div>
                    <div class="team-two__social">
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                        <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-vimeo-v"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">Ceo Founder</p>
                        <h3 class="team-two__title"><a href="speaker-single.html">{{$admin->name}}</a></h3>
                        <p class="team-two__single-text">This includes websites
                            <br> digital platforms.
                        </p>
                    </div>
                </div>
            </div>

            <!--Team Two Single Start-->
            @foreach($employee as $emplo)
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="900ms">
                <div class="team-two__single">
                    <div class="team-two__img">
                        <img src="{{asset($emplo->photo)}}" alt="">
                    </div>
                    <div class="team-two__social">
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                        <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-vimeo-v"></span></a>
                    </div>
                    <div class="team-two__content">
                        <p class="team-two__sub-title">{{$emplo->designation}}</p>
                        <h3 class="team-two__title"><a href="speaker-single.html">{{$emplo->name}}</a></h3>
                        <p class="team-two__single-text">This includes websites
                            <br> digital platforms.
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <!--Team Two Single End-->
            <!--Team Two Single Start-->

            <!--Team Two Single End-->
        </div>
    </div>
</section>
<!--Team Two End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-one__shape-1 img-bounce">
        <img src="{{asset('images/shapes/testimonial-one-shape-1.png')}}" alt="">
    </div>
    <div class="testimonial-one__shape-2 float-bob-x">
        <img src="{{asset('images/shapes/testimonial-one-shape-2.png')}}" alt="">
    </div>
    <div class="container">
        <div class="testimonial-one__top">
            <div class="section-title text-left">
                <div class="section-title__tagline-box">
                    <p class="section-title__tagline section-title__tagline--two"><span>//</span> Testimonials
                    </p>
                </div>
                <h2 class="section-title__title">What Our Client's <br><span>Feedback</span></h2>
            </div>
            <div class="testimonial-one__dot-style">
                <div class="swiper-dot-style1"></div>
            </div>
        </div>
        <div class="testimonial-one__bottom">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "slidesPerView": 1, 
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },

                        

                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 1
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'>
                <div class="swiper-wrapper">
                    <!--Testimonial One Single Start-->
                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">

                        <div class="testimonial-one__single">

                            <div class="testimonial-one__quote">
                                <span class="icon-quotation"></span>
                            </div>
                            <div class="testimonial-one__ratting">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <p class="testimonial-one__text">{{$testimonial->remarks}}</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{asset($testimonial->attendee->photo)}}" alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h3><a href="#">{{$testimonial->attendee->name}}</a></h3>
                                    <p>{{$testimonial->attendee->address}}</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    @endforeach
                    <!--Testimonial One Single End-->

                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->


@endsection