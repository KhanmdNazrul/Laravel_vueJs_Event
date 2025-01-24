@extends('frontend.layouts.eapp')

@section('content')
<section class="page-header">

    <div class="page-header__bg" style="background-image: url('images/backgrounds/site-footer-two-bg.jpg');">
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
            <h2>Booking</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('homen')}}">Home</a></li>
                   
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="contact-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
            <div class="contact__left">
                <br><br><br>
            <h2 class="section-title__title">Confim Your seat <br><span>before out of sale!</span></h2>
            <div>
                <br><br><br>
                <h2 section-title>Remaining Tickets : <span style="color: blue;">{{$total}}</span></h2>
                <br>
                <h2 section-title>Per Ticket Price : <span style="color: green;">{{$unitPrice}}</span></h2>

                
            </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact-two__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                        </div>
                    </div>
                    <div class="contact-two__form-box">

                        <form class="contact-two__form" method="post" action="{{route('cbooking')}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="hidden" name="attendee_id" value="{{Auth()->guard()->user()->id}}" placeholder="Your name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="hidden" name="event_id" value="{{$bokid}}" placeholder="Email Address"
                                            required="">
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="number" name="num_tickets" placeholder="Number of Tickets"
                                            required="">
                                    </div>
                                </div>
                                    <div class="contact-two__btn-box">
                                        <button type="submit" class="thm-btn contact-two__btn">Confirm Booking</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection