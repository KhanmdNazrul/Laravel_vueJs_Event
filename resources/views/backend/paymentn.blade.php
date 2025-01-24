@extends('frontend.layouts.eapp')

@section('content')
<section class="page-header">

    <div class="page-header__bg" style="background-image: url('images/backgroundssite-footer-two-bg.jpg');">
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
            <h2>Payments</h2>
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
                    <h2 class="section-title__title">Make Payment <br><span>Booking Details!</span></h2>
                    <div>
                        <br>
                        <br>
                        <table>
                            <br><br>

                            @foreach($bookings as $booking)
@php
$bid = $booking->id
@endphp
                            <tr>
                                <th style="color:black">
                                    <h5 style="color:black"> Event Title: </h5>
                                </th>
                                <th style="color:black">
                                    <h5 style="color:black">&nbsp; &nbsp; {{$booking->event->title}}</h5>
                                </th>
                            </tr>
                            <tr>
                                <th style="color:black">
                                    <h5 style="color:blue"> Tickets Qty</h5>
                                </th>
                                <th style="color:black">
                                    <h5 style="color:blue"> &nbsp; &nbsp; {{$booking->num_tickets}}</h5>
                                </th>
                            </tr>
                            <tr>
                                <th style="color:black">
                                    <h5 style="color:black"> Amount</h5>
                                </th>
                                <th style="color:black">
                                    <h5 style="color:blue"> &nbsp; {{$mm =$booking->total_price}}</h5>
                                </th>
                            </tr>
                            <tr>
                                <th style="color:black">
                                    <h5 style="color:black"> Start Date: </h5>
                                </th>
                                <th style="color:black"> {{ $booking->event->start_date}}</h5>
                                </th>
                            </tr>

                            @endforeach

                        </table>
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

                        <form class="contact-two__form" method="post" action="{{route('paymentstore')}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="number" name="booking_id" value="{{$bid}}" placeholder="Your name" required="">
                                    </div>
                                </div>

                                <div class="col-xl-6 ">
                                    <div class="contact-two__input-box">
                                        <select name="method" required="">
                                            <option value="">Select one</option>
                                            <option value="bkash">bkash(01845207869)</option>
                                            <option value="nagad">Nagad(01845207869)</option>
                                            <option value="upay">Upay(01845207869)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-12">
                                    <div class="contact-two__input-box">
                                        <input type="number" name="amount" value="{{$mm}}" placeholder="Must be equal to ticket price"
                                            required="">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-12">
                                    <div class="contact-two__input-box">
                                        <input type="text" name="trxn" placeholder="Transaction ID please"
                                            required="">
                                    </div>
                                </div>
                                <div class="contact-two__btn-box">
                                    <button type="submit" class="thm-btn contact-two__btn">Make Payment</button>
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