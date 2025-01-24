@extends('frontend.layouts.app')

@section('slider')
@include('frontend.layouts.slider')
@endsection

@section('aboutCompany')
<section class="about-three">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="about-three__left">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline section-title__tagline--two"><span>//</span> About
                                Company</p>
                        </div>
                        <h2 class="section-title__title">International Greatest <span>Conferences</span></h2>
                    </div>
                    <p class="about-three__text">Vestibulum tellus. Curabitur nlputate justo elit, at elementum
                        ates
                        pulvinar vel. in a Pellentesque habitant morbi tristique. Pellentesque
                        habitant justo tristique.</p>
                    <ul class="about-three__points list-unstyled">
                        <li>
                            <div class="icon">
                                <div class="about-three__points-icon-shape"
                                    style="background-image: url(assets/images/shapes/about-three-points-icon-shape.png);">
                                </div>
                                <span class="icon-connection"></span>
                            </div>
                            <div class="content">
                                <h4>Target Audience</h4>
                                <p>Utilize social media platforms, email newsletters, and <br>
                                    partnerships with event organizers</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <div class="about-three__points-icon-shape"
                                    style="background-image: url(assets/images/shapes/about-three-points-icon-shape.png);">
                                </div>
                                <span class="icon-team"></span>
                            </div>
                            <div class="content">
                                <h4>20+ Main Sponser</h4>
                                <p>Utilize social media platforms, email newsletters, and <br>
                                    partnerships with event organizers</p>
                            </div>
                        </li>
                    </ul>
                    <div class="about-three__btn-and-user-box">
                        <div class="about-three__btn-box">
                            <a href="about.html" class="about-three__btn thm-btn-two"><span
                                    class="fas fa-arrow-circle-right"></span>Discover more</a>
                        </div>
                        <div class="about-three__user-info">
                            <div class="about-three__user-img">
                                <img src="{{asset('images/resources/about-user-user-img.jpg')}}" alt="">
                            </div>
                            <div class="about-three__user-sign">
                                <p>Mike Hardson</p>
                                <span>CEO of Agrion</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-three__right">
                    <div class="about-three__img"
                        style="background-image: url(assets/images/shapes/about-three-img-shape-1.png);"></div>
                    <div class="about-three__experience">
                        <div class="about-three__experience-count count-box">
                            <h3 class="count-text" data-stop="15" data-speed="1500">00</h3>
                            <span>+</span>
                            <p>Years</p>
                        </div>
                        <p class="about-three__experience-text">of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('countdown')
@include('frontend.layouts.countdown')
@endsection


@section('feature')
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
@endsection

@section('schedule')
<section class="events-three">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <p class="section-title__tagline"><span>//</span> Schedule <span>//</span> </p>
            </div>
            <h2 class="section-title__title">Information Program & Event <br> <span>Schedule</span></h2>
        </div>
        <div class="events-three__main-tab-box tabs-box">
            <ul class="tab-buttons clearfix list-unstyled">
                <li data-tab="#1stday" class="tab-btn">
                    <div class="events-three__tab-btn-content">
                        <p>November 12 , 2023</p>
                        <h3>1<span>st</span>Day</h3>
                    </div>
                </li>
                <li data-tab="#2ndday" class="tab-btn active-btn">
                    <div class="events-three__tab-btn-content">
                        <p>November 15 , 2023</p>
                        <h3>2<span>nd</span>Day</h3>
                    </div>
                </li>
                <li data-tab="#3rdday" class="tab-btn">
                    <div class="events-three__tab-btn-content">
                        <p>November 18 , 2023</p>
                        <h3>3<span>rd</span>Day</h3>
                    </div>
                </li>
                <li data-tab="#4thdday" class="tab-btn">
                    <div class="events-three__tab-btn-content">
                        <p>November 22 , 2023</p>
                        <h3>4<span>th</span>Day</h3>
                    </div>
                </li>
            </ul>
            <div class="tabs-content">
                <!--tab-->
                <div class="tab" id="1stday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Humble Hill Running Day</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
                <!--tab-->
                <div class="tab active-tab" id="2ndday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="contact.html">Humble Hill Running Day</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
                <!--tab-->
                <div class="tab" id="3rdday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="contact.html">Humble Hill Running Day</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
                <!--tab-->
                <div class="tab" id="4thdday">
                    <div class="events-three__main-content-box">
                        <ul class="list-unstyled events-three__content-list">
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-1.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-1.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">John Singh</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Kelimontos DJ
                                                    Party 2019</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-2.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-2.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Meeting With Word</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                            <li class="events-three__content-single">
                                <div class="events-three__content-left">
                                    <div class="events-three__content-img">
                                        <img src="{{asset('images/resources/events-three-content-img-1-3.jpg')}}"
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
                                            <img src="{{asset('images/resources/events-three-content-user-img-1-3.jpg')}}"
                                                alt="">
                                        </div>
                                        <div class="events-three__content-user-info">
                                            <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                            <p class="events-three__content-user-sub-title">UX Design</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="events-three__content-right">
                                    <div class="events-three__content-right-content">
                                        <div class="events-three__content-right-content-left">
                                            <h4 class="events-three__content-right-content-title"><a
                                                    href="schedule-list.html">Humble Hill Running Day</a></h4>
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
                                                        <p>Video Streming</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="events-three__content-right-content-right">
                                            <h4 class="events-three__content-right-content-title-two">Wednesday
                                            </h4>
                                            <div class="events-three__content-right-content-time">
                                                <div class="icon">
                                                    <span class="icon-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10.00 am - 12.00 pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="events-three__btn-box">
                                        <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--tab-->
            </div>
        </div>
    </div>
</section>
@endsection

@section('speakers')
<section class="team-three">
    <div class="team-three__bg" style="background-image: url(assets/images/backgrounds/team-three-bg.jpg);">
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
                    <div class="swiper-slide">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{asset('images/team/team-three-3-1.jpg')}}" alt="">
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
                                    <p class="team-three__sub-title">Ceo Founder</p>
                                    <h4 class="team-three__title"><a href="speaker-single.html">Matthew
                                            White</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="swiper-slide">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{asset('images/team/team-three-3-2.jpg')}}" alt="">
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
                                    <p class="team-three__sub-title">Ceo Founder</p>
                                    <h4 class="team-three__title"><a href="speaker-single.html">D. Saira
                                            Smith</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                    <!--Team Three Single Start-->
                    <div class="swiper-slide">
                        <div class="team-three__single">
                            <div class="team-three__img-box">
                                <div class="team-three__img">
                                    <img src="{{asset('images/team/team-three-3-3.jpg')}}" alt="">
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
                                    <p class="team-three__sub-title">Ceo Founder</p>
                                    <h4 class="team-three__title"><a href="speaker-single.html">Maksdora
                                            White</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team Three Single End-->
                </div>
                <!-- If we need navigation buttons -->

            </div>
        </div>
    </div>
</section>
@endsection

@section('ticketPricing')
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
@endsection

@section('gallery')
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
                    <a href="gallery.html" class="gallery-two__btn thm-btn-two"><span
                            class="fas fa-arrow-circle-right"></span>View All Gallery</a>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-two__bottom">
        <div class="container">
            <div class="row masonary-layout">
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-1.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-1.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-2.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-2.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-3.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-3.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-4.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-4.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-5.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-5.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-6.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-6.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-7.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-7.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-8.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-8.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
                <!--Project Three Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="900ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset('images/gallery/gallery-2-9.jpg')}}" alt="">
                            <div class="gallery-two__content">
                                <div class="gallery-two__content-shape-1"
                                    style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                </div>
                                <div class="gallery-two__zoom-and-link">
                                    <a href="{{asset('images/gallery/gallery-2-9.jpg')}}" class="img-popup"><span
                                            class="icon-zoom"></span></a>
                                    <a href="project-details.html"><span class="icon-plus"></span></a>
                                </div>
                                <div class="gallery-two__content-text">
                                    <p>Event</p>
                                    <h5>Conference 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Three Single End-->
            </div>
        </div>
    </div>
</section>
@endsection