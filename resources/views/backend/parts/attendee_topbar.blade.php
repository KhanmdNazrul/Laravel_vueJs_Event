<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo">
            <img src="{{asset('images/logo-light.png')}}" class="logo-lg" alt="" height="22">
            <img src="{{asset('images/logo-sm.png')}}" class="logo-sm" alt="" height="24">
        </a>
    </div>

    <!-- Search input -->
    <div class="search-wrap" id="search-wrap">
        <div class="search-bar">
            <input class="search-input" type="search" placeholder="Search" />
            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                <i class="mdi mdi-close-circle"></i>
            </a>
        </div>
    </div>

    <nav class="navbar-custom">
        <ul class="navbar-right list-inline float-right mb-0">

            <li class="list-inline-item dropdown notification-list d-none d-md-inline-block">
                <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                    <i class="fas fa-search noti-icon"></i>
                </a>
            </li>

            <!-- language-->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('images/flags/us_flag.jpg')}}" class="mr-2" height="12" alt="" /> English <span class="mdi mdi-chevron-down"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                    <a class="dropdown-item" href="#"><img src="{{asset('images/flags/french_flag.jpg')}}" alt="" height="16" /><span> French </span></a>
                    <a class="dropdown-item" href="#"><img src="{{asset('images/flags/spain_flag.jpg')}}" alt="" height="16" /><span> Spanish </span></a>
                    <a class="dropdown-item" href="#"><img src="{{asset('images/flags/russia_flag.jpg')}}" alt="" height="16" /><span> Russian </span></a>
                    <a class="dropdown-item" href="#"><img src="{{asset('images/flags/germany_flag.jpg')}}" alt="" height="16" /><span> German </span></a>
                    <a class="dropdown-item" href="#"><img src="{{asset('images/flags/italy_flag.jpg')}}" alt="" height="16" /><span> Italian </span></a>
                </div>
            </li>

            <!-- full screen -->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                    <i class="fas fa-expand noti-icon"></i>
                </a>
            </li>

            <!-- notification -->
            <li class="dropdown notification-list list-inline-item">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fas fa-bell noti-icon"></i>
                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                    <!-- item-->
                    <h6 class="dropdown-item-text">
                        Notifications
                    </h6>
                    <div class="slimscroll notification-item-list">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                            <p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                            <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                            <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                        </a>

                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list list-inline-item">
                <div class="dropdown notification-list nav-pro-img">
                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('images/users/user-1.jpg')}}" alt="user" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        
                        <form method="post" action="{{route('attendee.logout')}}">
                            @csrf
                            <a class="dropdown-item" href="{{route('attendee.logout')}}"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                               Attendee Log Out
                            </a>
                        </form>
                    </div>
                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>