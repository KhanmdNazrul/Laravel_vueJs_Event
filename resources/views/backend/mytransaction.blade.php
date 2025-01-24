@extends('frontend.layouts.eapp')

@section('content')

@section('css')
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

<link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

<!-- Table css -->
<link href="{{asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('js')

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/metismenu.min.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/waves.min.js')}}"></script>

<script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- Responsive-table-->
<script src="{{asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')}}"></script>

<script>
    $(function() {
        $('.table-responsive').responsiveTable({
            addDisplayAllBtn: 'btn btn-secondary'
        });
    });
</script>

<!-- App js -->
<script src="{{asset('js/app.js')}}"></script>
@endsection


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
            <h2>My Transactions</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('homen')}}">Home</a></li>
                   
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Page Header End-->


<!--Contact Two Start-->
<section class="contact-two">
    <div class="container">
        <div class="row">
        <div class="col-xl-12">
                <div class="contact-two__right">
                    <div class="section-title text-left"><br><br>
                        <div class="section-title__tagline-box">
                           
                        </div>
                        <h2 class="section-title__title">Here are my all Booking <span>Transactions</span></h2>
                    </div>
                    
                    <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                            
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th data-priority="1">Event</th>
                                            <th data-priority="1">Tickets Qty</th>
                                            <th data-priority="1">Amount</th>
                                            <th data-priority="1">Trxn ID</th>
                                            <th data-priority="1">Method</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                @foreach($mbook as $book)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$book->booking->event->title}}</td>
                                            <td>{{$book->booking->num_tickets}}</td>
                                            <td>{{$book->amount}}</td>
                                            <td>{{$book->trxn_no}}</td>
                                            <td>{{$book->method}}</td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>


                </div>
            </div>
            
        </div>
    </div>
</section>
<!--Contact Two End-->

@endsection