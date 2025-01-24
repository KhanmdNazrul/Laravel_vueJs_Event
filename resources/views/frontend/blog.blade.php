@extends('frontend.layouts.app')

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
   
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>-</span></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="blog-page">
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
                                    @foreach($blogs as $blog)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{asset($blog->photo)}}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{route('bdetails', $blog->id)}}">{{$blog->title}}</a>
                                            </h3>
                                            <span class="sidebar__post-content-date">{{$blog->title}}</span>
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
                        <div class="blog-page__right">
                            <!--Blog Page Single Start-->
                            @foreach($blogs as $blog)
                            <div class="blog-page__single">
                                <div class="blog-page__img">
                                    <img src="{{asset($blog->photo)}}" alt="">
                                    <div class="blog-page__date">
                                        <p>{{$blog->date}}</p>
                                    </div>
                                </div>
                                <div class="blog-page__content">
                                    <ul class="blog-page__meta list-unstyled">
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
                                    <h3 class="blog-page__title"><a href="{{route('bdetails', $blog->id)}}">{{$blog->title}}</a></h3>
                                    <p class="blog-page__text-1">{{$blog->details}}</p>
                                    <div class="blog-page__btn-box">
                                        <a href="{{route('bdetails', $blog->id)}}" class="blog-page__btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--Blog Page Single End-->
                            <div class="blog-page__pagination">
                                <ul class="pg-pagination list-unstyled">
                                    <li class="count"><a href="blog-details.html">1</a></li>
                                    <li class="count"><a href="blog-details.html">2</a></li>
                                    <li class="count"><a href="blog-details.html">3</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next"><i
                                                class="icon-right-arrows"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection