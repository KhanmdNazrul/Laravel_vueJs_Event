@extends('frontend.layouts.app')

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
            <h2>Contact Us</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Page Header End-->

<!--Quick Contact Start-->
<section class="quick-contact">
    <div class="container">
        @if (session('msg'))
        <div class="alert alert-info">{{session('msg')}}</div>

        @endif
        <div class="row">
            <!--Quick Contact Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="quick-contact__single">
                    <h4 class="quick-contact__title">Visit a Office</h4>
                    <p class="quick-contact__text">You are most welcome to visit office.</p>
                    <div class="quick-contact__contact-list">
                        <p>Royal House, 152/21 Kakrail
                            <br> Dhaka, Bangladesh.
                        </p>
                    </div>
                    <div class="quick-contact__icon">
                        <span class="icon-pin"></span>
                    </div>
                </div>
            </div>
            <!--Quick Contact Single End-->
            <!--Quick Contact Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="quick-contact__single">
                    <h4 class="quick-contact__title">Make a Call</h4>
                    <p class="quick-contact__text">Keeping you always better connected.</p>
                    <div class="quick-contact__contact-list">
                        <p><a href="tel:15557890123">Service: +88 018-4520-7869</a></p>
                        <p><a href="tel:2334567890178802">Sales: +880 188 6452 078 69 & 102</a></p>
                    </div>
                    <div class="quick-contact__icon">
                        <span class="icon-phone-call"></span>
                    </div>
                </div>
            </div>
            <!--Quick Contact Single End-->
            <!--Quick Contact Single Start-->
            <div class="col-xl-4 col-lg-4">
                <div class="quick-contact__single">
                    <h4 class="quick-contact__title">Send Email</h4>
                    <p class="quick-contact__text">Drop us a mail we will answer you asap.</p>
                    <div class="quick-contact__contact-list">
                        <p><a href="mailto:mdnazrulkhandu@gmail.com">Sales: mdnazrulkhandu@gmail.com</a></p>
                        <p><a href="mailto:sendmail@company.com">Service: eventee.supreme@gmail.com </a></p>
                    </div>
                    <div class="quick-contact__icon">
                        <span class="icon-email"></span>
                    </div>
                </div>
            </div>
            <!--Quick Contact Single End-->
        </div>
    </div>
</section>
<!--Quick Contact End-->

<!--Contact Two Start-->
<section class="contact-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-two__left">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11333.284109025748!2d90.40554178290864!3d23.7424281272475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1733847434811!5m2!1sen!2sbd"
                        class="contact-two__google-map" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-two__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline section-title__tagline--two"><span>//</span>
                                Contact With Us</p>
                        </div>
                        <h2 class="section-title__title">Join the Community to <br><span>Know Us</span></h2>
                    </div>
                    <div class="contact-two__form-box">

                        <form class="contact-two__form" method="post" action="{{route('contact.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="email" name="email" placeholder="Email Address"
                                            required="">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-two__input-box">
                                        <input type="text" name="phone" placeholder="Enter Phone"
                                            required="">
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="contact-page__input-box text-message-box">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="contact-two__btn-box">
                                        <button type="submit" class="thm-btn contact-two__btn">Send A
                                            Message</button>
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
<!--Contact Two End-->

@endsection