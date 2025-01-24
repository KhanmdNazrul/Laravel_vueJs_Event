@extends('frontend.layouts.app')
@section('content')
<!--Main Slider Start-->
<section class="main-slider-three">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                } 
            }'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="main-slider-three__bg"
                    style="background-image: url('images/backgrounds/slider-3-1.jpg')"></div>
                <div class="main-slider-three__shape-1 float-bob-x">
                    <img src="{{asset('images/shapes/main-slider-three-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider-three__shape-2 img-bounce">
                    <img src="{{asset('images/shapes/main-slider-three-shape-2.png')}}" alt="">
                </div>
                <div class="main-slider-three__shape-3 float-bob-y">
                    <img src="{{asset('images/shapes/main-slider-three-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider-three__img">
                    <img src="{{asset('images/resources/main-slider-three-img-1.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-three__content">
                                <div class="main-slider-three__content-shape-1">
                                    <img src="{{asset('images/shapes/main-slider-three-content-shape-1.png')}}"
                                        alt="">
                                </div>
                                <div class="main-slider-three__sbu-title-box">
                                    <div class="main-slider-three__sbu-title-shape-1"
                                        style="background-image: url(images/shapes/main-slider-three-sbu-title-shape-1.png);">
                                    </div>
                                    <p class="main-slider-three__sbu-title">Welcome To Our Site</p>
                                </div>
                                <h2 class="main-slider-three__title">Biggest <br> Event Planner</h2>
                                <a href="#" class="main-slider-three__curved-circle">
                                    <div class="curved-circle">
                                        Discover more our work
                                    </div><!-- /.curved-circle -->
                                    <div class="main-slider-three__arrow-icon-box">
                                        <div class="main-slider-three__arrow-icon">
                                            <span class="icon-down-right"></span>
                                        </div>
                                    </div>
                                </a><!-- /.curved-circle -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="main-slider-three__bg"
                    style="background-image: url(images/backgrounds/slider-3-2.jpg);"></div>
                <div class="main-slider-three__shape-1 float-bob-x">
                    <img src="{{asset('images/shapes/main-slider-three-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider-three__shape-2 img-bounce">
                    <img src="{{asset('images/shapes/main-slider-three-shape-2.png')}}" alt="">
                </div>
                <div class="main-slider-three__shape-3 float-bob-y">
                    <img src="{{asset('images/shapes/main-slider-three-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider-three__img">
                    <img src="{{asset('images/resources/main-slider-three-img-2.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-three__content">
                                <div class="main-slider-three__content-shape-1">
                                    <img src="{{asset('images/shapes/main-slider-three-content-shape-1.png')}}"
                                        alt="">
                                </div>
                                <div class="main-slider-three__sbu-title-box">
                                    <div class="main-slider-three__sbu-title-shape-1"
                                        style="background-image: url(images/shapes/main-slider-three-sbu-title-shape-1.png);">
                                    </div>
                                    <p class="main-slider-three__sbu-title">We are the First</p>
                                </div>
                                <h2 class="main-slider-three__title">To manage <br> Your Event</h2>
                                <a href="#" class="main-slider-three__curved-circle">
                                    <div class="curved-circle">
                                        Discover more our work
                                    </div><!-- /.curved-circle -->
                                    <div class="main-slider-three__arrow-icon-box">
                                        <div class="main-slider-three__arrow-icon">
                                            <span class="icon-down-right"></span>
                                        </div>
                                    </div>
                                </a><!-- /.curved-circle -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="main-slider-three__bg"
                    style="background-image: url(images/backgrounds/slider-3-3.jpg);"></div>
                <div class="main-slider-three__shape-1 float-bob-x">
                    <img src="{{asset('images/shapes/main-slider-three-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider-three__shape-2 img-bounce">
                    <img src="{{asset('images/shapes/main-slider-three-shape-2.png')}}" alt="">
                </div>
                <div class="main-slider-three__shape-3 float-bob-y">
                    <img src="{{asset('images/shapes/main-slider-three-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider-three__img">
                    <img src="{{asset('images/resources/main-slider-three-img-3.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-three__content">
                                <div class="main-slider-three__content-shape-1">
                                    <img src="{{asset('images/shapes/main-slider-three-content-shape-1.png')}}"
                                        alt="">
                                </div>
                                <div class="main-slider-three__sbu-title-box">
                                    <div class="main-slider-three__sbu-title-shape-1"
                                        style="background-image: url(images/shapes/main-slider-three-sbu-title-shape-1.png);">
                                    </div>
                                    <p class="main-slider-three__sbu-title">We Are Expert on</p>
                                </div>
                                <h2 class="main-slider-three__title">Event <br> Management</h2>
                                <a href="#" class="main-slider-three__curved-circle">
                                    <div class="curved-circle">
                                        Discover more our work
                                    </div><!-- /.curved-circle -->
                                    <div class="main-slider-three__arrow-icon-box">
                                        <div class="main-slider-three__arrow-icon">
                                            <span class="icon-down-right"></span>
                                        </div>
                                    </div>
                                </a><!-- /.curved-circle -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <!-- If we need navigation buttons -->

    </div>
</section>
<!--Main Slider End-->

<!--Feature Two Start-->
<section class="feature-two">
    <div class="feature-two__wrap">
        <div class="feature-two__shape-bg float-bob-y"
            style="background-image: url(assets/images/shapes/feature-two-shape-bg.png);"></div>
        <div class="feature-two__shape-1">
            <img src="{{asset('images/shapes/feature-two-shape-1.png')}}" alt="">
        </div>
        <div class="feature-two__shape-2">
            <img src="{{asset('images/shapes/feature-two-shape-2.png')}}" alt="">
        </div>
        <div class="feature-two__shape-3">
            <img src="{{asset('images/shapes/feature-two-shape-3.png')}}" alt="">
        </div>
        <div class="feature-two__shape-4">
            <img src="{{asset('images/shapes/feature-two-shape-4.png')}}" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <p class="section-title__tagline"><span>//</span> Our Features <span>//</span> </p>
                </div>
                <h2 class="section-title__title">Features For Our Client For <br> <span>Your Event</span></h2>
            </div>
            <div class="row">
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="feature-two__single">
                        <div class="feature-two__img">
                            <img src="{{asset('images/resources/feature-two-1-1.jpg')}}" alt="">
                        </div>
                        <div class="feature-two__content">
                            <h4 class="feature-two__title"><a href="speaker.html">Confirm Speakers</a></h4>
                            <div class="feature-two__icon-and-text">
                                <div class="feature-two__icon">
                                    <span class="icon-icon-15151715"></span>
                                </div>
                                <p class="feature-two__text">This invol high-level structure <br>
                                    of software system.</p>
                            </div>
                            <div class="feature-two__btn-box">
                                <a href="speaker.html" class="feature-two__btn">More Details <span
                                        class="icon-right-up"></span> </a>
                            </div>
                        </div>
                        <div class="feature-two__count"></div>
                    </div>
                </div>
                <!--Feature Two Single End-->
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="feature-two__single">
                        <div class="feature-two__img">
                            <img src="{{asset('images/resources/feature-two-1-2.jpg')}}" alt="">
                        </div>
                        <div class="feature-two__content">
                            <h4 class="feature-two__title"><a href="about.html">Best Digital Ideas</a></h4>
                            <div class="feature-two__icon-and-text">
                                <div class="feature-two__icon">
                                    <span class="icon-brain"></span>
                                </div>
                                <p class="feature-two__text">This invol high-level structure <br>
                                    of software system.</p>
                            </div>
                            <div class="feature-two__btn-box">
                                <a href="about.html" class="feature-two__btn">More Details <span
                                        class="icon-right-up"></span> </a>
                            </div>
                        </div>
                        <div class="feature-two__count"></div>
                    </div>
                </div>
                <!--Feature Two Single End-->
                <!--Feature Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="feature-two__single">
                        <div class="feature-two__img">
                            <img src="{{asset('images/resources/feature-two-1-3.jpg')}}" alt="">
                        </div>
                        <div class="feature-two__content">
                            <h4 class="feature-two__title"><a href="contact.html">Networking People</a></h4>
                            <div class="feature-two__icon-and-text">
                                <div class="feature-two__icon">
                                    <span class="icon-connection"></span>
                                </div>
                                <p class="feature-two__text">This invol high-level structure <br>
                                    of software system.</p>
                            </div>
                            <div class="feature-two__btn-box">
                                <a href="contact.html" class="feature-two__btn">More Details <span
                                        class="icon-right-up"></span> </a>
                            </div>
                        </div>
                        <div class="feature-two__count"></div>
                    </div>
                </div>
                <!--Feature Two Single End-->
            </div>
        </div>
    </div>
</section>
<!--Feature Two End-->

<!--Events Three Start-->
<section class="events-three">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <p class="section-title__tagline"><span>//</span> Upcoming Events <span>//</span> </p>
            </div>
            <h2 class="section-title__title"> Popular Events <br> <span>Schedule</span></h2>
        </div>
        <div class="events-three__main-tab-box tabs-box">

            <div class="tabs-content">
                <!--tab-->
                <div class="tab active-tab">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            @foreach($events as $event)
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset($event->image)}}"
                                            alt="">
                                        <div class="events-three__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                class="video-popup">
                                                <div class="events-three__video-icon">
                                                    <span class="icon-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="events-three__content-user">
                                        <div class="events-three__content-user-img">
                                            <img src="{{asset($event->speaker->photo)}}" alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">{{$event->speaker->name}}</h4>
                                            <p class="events-three__content-user-sub-title">{{$event->speaker->profession}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="#">{{$event->title}}</a></h4>
                                            <ul class="list-unstyled events-three__content-right-content-list">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-coffee-cup"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Coffee & Snacks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-youtube"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Video Streaming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">{{$event->start_date}}
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{$event->start_time}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="{{route('event_single',$event->id)}}" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!--Events Three End-->

<!--Team Three Start-->
<section class="team-three">
    <div class="team-three__bg" style="background-image: url(images/backgrounds/team-three-bg.jpg);">
    </div>
    <div class="container">
        <div class="team-three__top">
            <div class="team-three__top-left">
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline"><span>//</span> About The Event</span>
                    </div>
                    <h2 class="section-title__title">Our Best Expert Event <br> <span>Speakers</span></h2>
                </div>
            </div>
            <div class="team-three__top-right">
                <div class="team-three__nav">
                    <div class="swiper-button-next1">
                        <i class="icon-arrow"></i>
                    </div>
                    <div class="swiper-button-prev1">
                        <i class="icon-right-arrows"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-three__bottom">
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
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "1200": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'>
                <div class="swiper-wrapper">
                    <!--Team Three Single Start-->


                    <div>
                        @foreach($speakers as $speaker)
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{asset($speaker->photo)}}" height="400" width="500" alt="">
                                </div>
                                <div class="team-three__share-and-social">
                                    <div class="team-three__share">
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                    </div>
                                    <div class="team-three__social">
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                        <a href="#"><span class="fas fa-wifi"></span></a>
                                    </div>
                                </div>
                                <div class="team-three__content">
                                    <p class="team-three__sub-title">{{$speaker->profession}}</p>
                                    <h4 class="team-three__title"><a href="{{route('speaker',$speaker->id)}}">{{$speaker->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <!--Team Three Single End-->


                </div>
                <!-- If we need navigation buttons -->

            </div>
        </div>
    </div>
</section>
<!--Team Three End-->

<!--Pricing Two Start-->
<section class="pricing-two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline"><span>//</span> Price Plan <span>//</span></span>
            </div>
            <h2 class="section-title__title">Ticket To The Grow Marketing <br> <span>Conference</span></h2>
        </div>
        <div class="row">
            <!--Pricing Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="pricing-two__single">
                    <div class="pricing-two__single-inner">
                        <h4 class="pricing-two__title">Standard Pass</h4>
                        <div class="pricing-two__price-box">
                            <h2><span>$</span>20</h2>
                            <p>/ One Day</p>
                        </div>
                        <ul class="list-unstyled pricing-two__points">
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Can Access Online Free</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Gat Vip Privileges Seta</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Free Lunch Foods Free Wifi</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Always plan support</p>
                                </div>
                            </li>
                        </ul>
                        <div class="pricing-two__btn-box">
                            <a href="pricing.html" class="pricing-two__btn">Buy Ticket</a>
                        </div>
                        <div class="pricing-two__shape-1">
                            <img src="{{asset('images/shapes/pricing-two-shape-1.png')}}" alt="">
                        </div>
                        <div class="pricing-two__shape-2">
                            <img src="{{asset('images/shapes/pricing-two-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="pricing-two__popular">
                        <p>Popular</p>
                    </div>
                </div>
            </div>
            <!--Pricing Two Single End-->
            <!--Pricing Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <div class="pricing-two__single">
                    <div class="pricing-two__single-inner">
                        <h4 class="pricing-two__title">Flexible Pass</h4>
                        <div class="pricing-two__price-box">
                            <h2><span>$</span>40</h2>
                            <p>/ One Day</p>
                        </div>
                        <ul class="list-unstyled pricing-two__points">
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Can Access Online Free</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Gat Vip Privileges Seta</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Free Lunch Foods Free Wifi</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Always plan support</p>
                                </div>
                            </li>
                        </ul>
                        <div class="pricing-two__btn-box">
                            <a href="pricing.html" class="pricing-two__btn">Buy Ticket</a>
                        </div>
                        <div class="pricing-two__shape-1">
                            <img src="{{asset('images/shapes/pricing-two-shape-1.png')}}" alt="">
                        </div>
                        <div class="pricing-two__shape-2">
                            <img src="{{asset('images/shapes/pricing-two-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="pricing-two__popular">
                        <p>Popular</p>
                    </div>
                </div>
            </div>
            <!--Pricing Two Single End-->
            <!--Pricing Two Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                <div class="pricing-two__single">
                    <div class="pricing-two__single-inner">
                        <h4 class="pricing-two__title">Business Pass</h4>
                        <div class="pricing-two__price-box">
                            <h2><span>$</span>70</h2>
                            <p>/ One Day</p>
                        </div>
                        <ul class="list-unstyled pricing-two__points">
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Can Access Online Free</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Gat Vip Privileges Seta</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Free Lunch Foods Free Wifi</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"></div>
                                <div class="text">
                                    <p>Always plan support</p>
                                </div>
                            </li>
                        </ul>
                        <div class="pricing-two__btn-box">
                            <a href="pricing.html" class="pricing-two__btn">Buy Ticket</a>
                        </div>
                        <div class="pricing-two__shape-1">
                            <img src="{{asset('images/shapes/pricing-two-shape-1.png')}}" alt="">
                        </div>
                        <div class="pricing-two__shape-2">
                            <img src="{{asset('images/shapes/pricing-two-shape-2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="pricing-two__popular">
                        <p>Popular</p>
                    </div>
                </div>
            </div>
            <!--Pricing Two Single End-->
        </div>
    </div>
</section>
<!--Pricing Two End-->

<!--Gallery Two Start-->
<section class="gallery-two">
    <div class="gallery-two__top">
        <div class="container">
            <div class="gallery-two__top-inner">
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline"><span>//</span> Event Gallery
                            <span>//</span></span>
                    </div>
                    <h2 class="section-title__title">Our Greatest Event <br> <span>Showcase</span></h2>
                </div>
                <div class="gallery-two__btn-box">
                    <a href="{{route('fgallery')}}" class="gallery-two__btn thm-btn-two"><span
                            class="fas fa-arrow-circle-right"></span>View All Gallery</a>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-two__bottom">
        <div class="container">
            <div class="row masonary-layout">
                <!--Project Three Single Start-->
                @foreach($galleries as $gallery)
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset($gallery->photo)}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="images/gallery/gallery-2-1.jpg" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="#"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>uploadded by {{$gallery->attendee->name}}</p>
                                    <h5>{{$gallery->caption}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Project Three Single End-->

            </div>
        </div>
    </div>
</section>
<!--Gallery Two End-->

<!--Brand Three Start-->
<section class="brand-three">
    <div class="brand-three__wrap">
        <div class="brand-three__shape-bg float-bob-y"
            style="background-image: url(assets/images/shapes/brand-three-shape-bg.png);"></div>
        <div class="brand-three__shape-1">
            <img src="{{asset('images/shapes/brand-three-shape-1.png')}}" alt="">
        </div>
        <div class="brand-three__shape-2">
            <img src="{{asset('images/shapes/brand-three-shape-2.png')}}" alt="">
        </div>
        <div class="brand-three__shape-3">
            <img src="{{asset('images/shapes/brand-three-shape-3.png')}}" alt="">
        </div>
        <div class="brand-three__shape-4">
            <img src="{{asset('images/shapes/brand-three-shape-4.png')}}" alt="">
        </div>
        <div class="container">
            <div class="brand-three__inner">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline"><span>//</span> Sponsors <span>//</span></span>
                    </div>
                    <h2 class="section-title__title">Our Company Official <br> <span>Sponsors</span></h2>
                </div>
                <ul class="list-unstyled brand-three__list">
                            <li>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img">
                                        <img src="{{asset('images/brand/brand-3-1.png')}}" alt="">
                                    </div>
                                    <div class="brand-three__img-hover">
                                        <img src="{{asset('images/brand/brand-3-1-hover.png')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img">
                                        <img src="{{asset('images/brand/brand-3-2.png')}}" alt="">
                                    </div>
                                    <div class="brand-three__img-hover">
                                        <img src="{{asset('images/brand/brand-3-2-hover.png')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img">
                                        <img src="{{asset('images/brand/brand-3-3.png')}}" alt="">
                                    </div>
                                    <div class="brand-three__img-hover">
                                        <img src="{{asset('images/brand/brand-3-3-hover.png')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img">
                                        <img src="{{asset('images/brand/brand-3-4.png')}}" alt="">
                                    </div>
                                    <div class="brand-three__img-hover">
                                        <img src="{{asset('images/brand/brand-3-4-hover.png')}}" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-unstyled brand-three__list brand-three__list--two">
                            <li>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img">
                                        <img src="{{asset('images/brand/brand-3-5.png')}}" alt="">
                                    </div>
                                    <div class="brand-three__img-hover">
                                        <img src="{{asset('images/brand/brand-3-5-hover.png')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img">
                                        <img src="{{asset('images/brand/brand-3-6.png')}}" alt="">
                                    </div>
                                    <div class="brand-three__img-hover">
                                        <img src="{{asset('images/brand/brand-3-6-hover.png')}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="brand-three__img-box">
                                    <div class="brand-three__img">
                                        <img src="{{asset('images/brand/brand-3-7.png')}}" alt="">
                                    </div>
                                    <div class="brand-three__img-hover">
                                        <img src="{{asset('images/brand/brand-3-7-hover.png')}}" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
            </div>
        </div>
    </div>
</section>
<!--Brand Three End-->

<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="testimonial-two__bg"
        style="background-image: url(images/backgrounds/testimonial-two-bg.jpg);"></div>
    <div class="container">
        <div class="testimonial-two__top">
            <div class="section-title text-left">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline"><span>//</span> About The Event</span>
                </div>
                <h2 class="section-title__title">What Our Client's <br> <span>Feedback</span></h2>
            </div>
            <div class="testimonial-two__nav">
                <div class="swiper-button-next1" tabindex="0" role="button" aria-label="Previous slide">
                    <i class="icon-arrow"></i>
                </div>
                <div class="swiper-button-prev1" tabindex="0" role="button" aria-label="Next slide">
                    <i class="icon-right-arrows"></i>
                </div>
            </div>
        </div>
        <div class="testimonial-two__bottom">
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
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 3
                                },
                                "1200": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'>
                <div class="swiper-wrapper">
                    <!--Testimonial Two Single Start-->
                    @foreach($feedbacks as $feedback)
                    <div class="swiper-slide">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="{{asset($feedback->attendee->photo)}}" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <p class="testimonial-two__client-name"><a href="#">{{$feedback->attendee->name}}</a></p>
                                    <span class="testimonial-two__client-sub-title">{{$feedback->designation}}, {{$feedback->company}}</span>
                                </div>
                            </div>
                            <div class="testimonial-two__content">
                                <div class="testimonial-two__icon">
                                    <span class="icon-conversation"></span>
                                </div>
                                <p class="testimonial-two__text">{{$feedback->feedback}}</p>
                                <div class="testimonial-two__rating-box">
                                    <div class="testimonial-two__rating">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="testimonial-two__rating-text">5 Out of 5.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Testimonial Two Single End-->
                   

                </div>
                <!-- If we need navigation buttons -->

            </div>
        </div>
    </div>
</section>
<!--Testimonial Two End-->

<!--Blog Three Start-->
<section class="blog-three">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline"><span>//</span> Latest Blog <span>//</span></span>
            </div>
            <h2 class="section-title__title">Whats Going On Around <br> <span>You</span></h2>
        </div>
        <div class="row">
            <!--Blog Three Single Start-->
            @foreach($blogs as $blog)
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-three__single">
                    <div class="blog-three__img">
                        <img src="{{asset($blog->photo)}}" alt="">
                    </div>
                    <div class="blog-three__date-and-tag">
                        <div class="blog-three__date">
                            <p>{{$blog->title}}</p>
                        </div>
                        <div class="blog-three__tag">
                            <div class="blog-three__tag-border"></div>
                        </div>
                    </div>
                    <h3 class="blog-three__title"><a href="{{route('bdetails',$blog->id)}}">{{$blog->title}}</a></h3>
                </div>
            </div>
            @endforeach
            <!--Blog Three Single End-->
        </div>
    </div>
</section>
<!--Blog Three End-->

@endsection