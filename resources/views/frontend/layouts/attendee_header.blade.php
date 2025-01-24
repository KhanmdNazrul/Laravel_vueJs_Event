<header class="main-header-three">
    <div class="main-header-three__top">
        <div class="main-header-three__top-inner">
            <ul class="list-unstyled main-header-three__contact-list">
                <li>
                    <div class="icon">
                        <i class="icon-email"></i>
                    </div>
                    <div class="text">
                        <p><a href="mailto:needhelp@company.com">eventeesupreme@gmail.com</a></p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-pin"></i>
                    </div>
                    <div class="text">
                        <p>80 Kakrail, Dhaka</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-phone-call"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel:0012346823705">+880 1845207869</a></p>
                    </div>
                </li>
            </ul>
            <div class="main-header-three__social-and-top-menu">
                <div class="main-header-three__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fas fa-wifi"></i></a>
                </div>
                <div class="main-header-three__top-menu">
                    <ul class="main-header-three__top-menu-list list-unstyled">
                        <li><a href="{{route('galleryn')}}">Gallery</a></li>
                        <li><a href="{{route('mytransaction')}}">My Transactions</a></li>
                        <li><a href="{{route('mybooking')}}">My Booking</a></li>
                        <li><div>
                            <form method="post" action="{{route('attendee.logout')}}">
                                @csrf
                                <a class="dropdown-item" href="{{route('attendee.logout')}}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">Log Out</a>
                            </form>
                        </div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="main-menu-three__wrapper-inner">
                <div class="main-menu-three__left">
                    <div class="main-menu-three__logo">
                        <a href="index.html"><img src="{{asset('images/resources/logo-3.png')}}" alt=""></a>
                    </div>
                    <div class="main-menu-three__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="{{route('homen')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('aboutn')}}">About</a>
                            </li>

                            <li>
                                <a href="{{route('eventn')}}">Events</a>
                            </li>
                           
                            <li>
                                <a href="{{route('blogn')}}">Blog</a>
                            </li>
                            <li>
                                <a href="{{url('/attendee/contactn')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu-three__right">
                    <div class="main-menu-three__login-box">
                        <div class="">
                            <h5 style="color: white">{{Auth()->guard()->user()->name}}</h5>
                        </div>
                        <div class="icon">
                            <img src="{{asset(Auth()->guard()->user()->photo)}}" height="70" width="70" alt="">
                        </div>
                   
                        <div class="select-box">
                            <select class="wide">
                                <option data-display="My Menus">Select Option</option>
                                <option value="1"><a href="">my Booking</a></option>
                                <option value="1"><a href="">Saved Events</a></option>
                                <option value="1"><a href="">My transactions</a></option>
                            </select>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>