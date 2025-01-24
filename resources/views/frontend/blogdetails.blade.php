@extends('frontend.layouts.app')

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
            <h2></h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <h3 class="sidebar__title">Search</h3>
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-loupe"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Category</h3>
                        <ul class="blog-details__catagories-list list-unstyled">
                            <li>
                                <a href="blog-details.html">Notable Speakers<span
                                        class="icon-right-arrows"></span></a>
                            </li>
                            <li class="active">
                                <a href="blog-details.html">Personal Insights<span
                                        class="icon-right-arrows"></span></a>
                            </li>
                            <li>
                                <a href="blog-details.html">Home Renovation<span
                                        class="icon-right-arrows"></span></a>
                            </li>
                            <li>
                                <a href="blog-details.html">Standout speakers<span
                                        class="icon-right-arrows"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Recent Post</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach($ablogs as $nblog)
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="{{asset($nblog->photo)}}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="{{route('bdetails',$nblog->id)}}">{{$nblog->title}}</a>
                                    </h3>
                                    <span class="sidebar__post-content-date">{{$nblog->date}}</span>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags Cloud</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Event</a>
                            <a href="#">Meetup</a>
                            <a href="#">Toolset</a>
                            <a href="#">Conference</a>
                            <a href="#">Store</a>
                            <a href="#">Public</a>
                            <a href="#">Creative</a>
                            <a href="#">schedule</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__right">
                    <div class="blog-details__img">
                        <img src="{{asset($blog->photo)}}" alt="">
                    </div>
                    <div class="blog-details__content">
                        <ul class="blog-details__meta list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-tag"></span>
                                </div>
                                <a href="#">Corporate</a>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-user"></span>
                                </div>
                                <a href="#">{{$blog->admin->name}}</a>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-comments"></span>
                                </div>
                                <a href="#">{{$total}} Comment</a>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-heart"></span>
                                </div>
                                <a href="#">0 Like</a>
                            </li>
                        </ul>

                        <div class="blog-details__quote-and-text">
                            <div class="blog-details__quote">
                                <span class="fas fa-quote-left"></span>
                            </div>
                            <p class="blog-details__quote-text">{{$blog->title}}</p>
                        </div>

                        <p class="blog-details__quote-text-2">{{$blog->details}}</p>
                        <div class="blog-details__social-box">
                            <p>Share:</p>
                            <div class="blog-details__social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-pinterest-p"></span></a>
                            </div>
                        </div>
                        <div class="comment-one">
                            <h3 class="comment-one__title">Comments {{$total}}</h3>
                            @foreach($comments as $comment)
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="{{asset($comment->attendee->photo)}}" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>{{$comment->attendee->name}}</h3>
                                    <p>{{$comment->content}}</p>
                                    <div class="comment-one__date-and-btn">
                                        <p class="comment-one__date">{{$comment->date}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          
                        </div>
                        <div class="comment-form__form-inner">
                            <h3 class="comment-form__title">Leave A comment</h3>
                            <form action="assets/inc/sendemail.php"
                                class="comment-form__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <a href="{{route('attendee.login')}}"><button type="button" class="comment-form__btn">Leave
                                                    Comment</button></a>
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
    </div>
</section>

@endsection