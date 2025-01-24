@extends('frontend.layouts.app')

@section('content')

<!--Page Header Start-->
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
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span>-</span></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Gallery Page Start-->
<section class="gallery-page">
    <div class="gallery-two__bottom">
        <div class="container">
            <div class="row masonary-layout">
                <!--Project Three Single Start-->
                @foreach($galleries as $gallery)
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="gallery-two__single">
                        <div class="gallery-two__img">
                            <img src="{{asset($gallery->photo)}}" height="300px" width="300px" alt="">
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
<!--Gallery Page End-->

@endsection