<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>EVENTEE Supreme | Event management Center</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
   @yield('css')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        @if (Auth()->guard('admin')->check())
			 @include('backend.parts.topbar')
			 @elseif (Auth()->guard('attendee')->check())
			 @include('backend.parts.attendee_topbar')
			 @endif

        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        @if (Auth()->guard('admin')->check())
			 @include('backend.parts.leftbar')
			 @elseif (Auth()->guard('attendee')->check())
			 @include('backend.parts.attendee_leftbar')
			 @endif
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')
            <!-- content -->

            <footer class="footer">
                © 2019 Zegva <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

   @yield('js')

</body>
</html>