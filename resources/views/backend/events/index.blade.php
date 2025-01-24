@extends('backend.parts.app')
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
<!-- jQuery  -->
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

<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Eventee</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Tables</a>
                            </li>
                            <li class="breadcrumb-item active">Events Table</li>
                        </ol>


                        @if (session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="float-right d-none d-md-block app-datepicker">
                        <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                        <i class="mdi mdi-chevron-down mdi-drop"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Event List</h4>
                        <p class="sub-title">Here are all Events of us. </p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                            <div class="float-right"><a href="{{route('event.create')}}"><button class="btn btn-success">Add New</button></a></div>

                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th data-priority="1">Title</th>
                                            <th data-priority="3">Photo</th>
                                            <th data-priority="2">Category</th>
                                            <th data-priority="1">Speaker</th>
                                            <th data-priority="2">Organiser</th>
                                            <th data-priority="1">Description</th>      
                                            <th data-priority="2">Num of Tickets</th>
                                            <th data-priority="2">Unit Price</th>
                                            <th data-priority="3">Address</th>                                
                                            <th data-priority="3">Country</th>
                                            <th data-priority="3">City</th>
                                            <th data-priority="3">Start Date</th>
                                            <th data-priority="3">End Date</th>
                                            <th data-priority="3">Start Time</th>
                                            <th data-priority="1" style="width:230px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($events as $event)

                                        <tr>
                                            <th>{{$loop->iteration}}</th>
                                            <td>{{$event->title}}</td>
                                            <td><img src="{{asset($event->image)}}" width="100px" alt=""></td>
                                            <td>{{$event->catagory->name}}</td>                                           
                                            <td>{{$event->speaker->name}}</td>
                                            <td>{{$event->organiser->name}}</td>
                                            <td>{{$event->description}}</td>
                                            <td>{{$event->num_tickets}}</td>
                                            <td>{{$event->unit_price}}</td>
                                            <td>{{$event->address}}</td>
                                            <td>{{$event->country->name}}</td>
                                            <td>{{$event->city->name}}</td>
                                            <td>{{$event->start_date}}</td>
                                            <td>{{$event->end_date}}</td>
                                            <td>{{$event->start_time}}</td>
                                            <td>

                                                <form action="{{route('event.destroy', $event->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('event.show',$event->id)}}" class="btn btn-info">show</a>
                                                    <a href="{{route('event.edit',$event->id)}}" class="btn btn-success">Edit</a>

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->

</div>

@endsection