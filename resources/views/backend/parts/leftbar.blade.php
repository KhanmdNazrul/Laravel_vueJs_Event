<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{url('/admin/dashboard')}}" class="waves-effect">
                        <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right">9+</span> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-star"></i><span> Admin <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('general_admin.create')}}"><i class="fa fa-angle-double-right"></i> <span>Add New</span></a></li>
                        <li><a href="{{route('general_admin.index')}}"> <i class="fa fa-angle-double-right"></i> Manage Admin</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-star"></i><span> Employee <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('employee.create')}}"><i class="fa fa-angle-double-right"></i> <span>Add New</span></a></li>
                        <li><a href="{{route('employee.index')}}"> <i class="fa fa-angle-double-right"></i> Manage Employee</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i><span> Attendee <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('attendee.create')}}"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                        <li><a href="{{route('attendee.index')}}"><i class="fa fa-angle-double-right"></i> Manage Attendee</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tags"></i><span> Catagories <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('catagory.create')}}"><i class="fa fa-angle-double-right"></i> Create New</a></li>
                        <li><a href="{{route('catagory.index')}}"><i class="fa fa-angle-double-right"></i> Manage Catagories</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-plus"></i><span> Organisers <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('organiser.create')}}"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                        <li><a href="{{route('organiser.index')}}"><i class="fa fa-angle-double-right"></i> Manage Organisers</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bookmark"></i><span> Events <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('event.create')}}"><i class="fa fa-angle-double-right"></i> Add New Event</a></li>
                        <li><a href="{{route('event.index')}}"><i class="fa fa-angle-double-right"></i> Manage Events</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-odnoklassniki"></i><span> Speakers <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('speaker.create')}}"><i class="fa fa-angle-double-right"></i> Add New Speaker</a></li>
                        <li><a href="{{route('speaker.index')}}"><i class="fa fa-angle-double-right"></i> Manage Speakers</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tags"></i><span> Events_components<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>

                    <ul class="submenu">

                   <li>     <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tags"></i><span> Countries<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{route('country.create')}}"><i class="fa fa-angle-double-right"></i>Add Country</a></li>
                            <li><a href="{{route('country.index')}}"><i class="fa fa-angle-double-right"></i>Manage Country list</a></li>
                        </ul>
                        </li>
<li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-tags"></i><span> Cities<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="{{route('city.create')}}"><i class="fa fa-angle-double-right"></i>Add City</a></li>
                            <li><a href="{{route('city.index')}}"><i class="fa fa-angle-double-right"></i>Manage City List</a></li>
                        </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-check-circle"></i><span> Bookings <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('booking.create')}}"><i class="fa fa-angle-double-right"></i> New Booking</a></li>
                        <li><a href="{{route('booking.index')}}"><i class="fa fa-angle-double-right"></i> Confirmed Booking</a></li>
                        <li><a href=""><i class="fa fa-angle-double-right"></i> Cancel Booking</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('payment.index')}}" class="waves-effect"><i class="fas fa-file-invoice-dollar"></i><span> payments <span class="float-right menu-arrow"></a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file text-aqua"></i><span> Reports <span class="float-right menu-arrow"></a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-newspaper"></i><span> Blogs <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('blog.create')}}"><i class="fa fa-angle-double-right"></i> Add Blog</a></li>
                        <li><a href="{{route('blog.index')}}"><i class="fa fa-angle-double-right"></i> Manage Blogs</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-comment"></i><span> Comments<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('comment')}}"><i class="fa fa-angle-double-right"></i> Manage comments</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('testimonial.index')}}" class="waves-effect"><i class="fa fa-question-circle fa-lg"></i><span>Feedback<span><i class="mdi mdi-chevron-right"></i></span> </span></a>
    
                </li>

                
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-comment"></i><span> Gallery<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('gallery')}}"><i class="fa fa-angle-double-right"></i> Manage Gallery</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-question-circle fa-lg"></i><span> FAQs <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href=""><i class="fa fa-angle-double-right"></i> Create New</a></li>
                        <li><a href=""><i class="fa fa-angle-double-right"></i> Manage Faqs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('message.index')}}" class="waves-effect"><i class="fa fa-envelope text-aqua"></i><span> Messages <span class="float-right menu-arrow"></a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>