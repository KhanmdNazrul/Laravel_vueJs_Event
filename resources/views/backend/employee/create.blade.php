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
                    <h4 class="page-title">Employee adding Form</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Eventee</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Form</a>
                        </li>
                        <li class="breadcrumb-item active">Employee adding Form</li>
                    </ol>
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
                        <div class="col-lg-8 offset-2">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Employee Adding Form</h4>
                                    
                                    <form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{old('name')}}" class="form-control" required placeholder="Enter  Name" />
                                            @error('name')
												<div class="alert alert-danger">{{$message}}</div>
												@enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" name="designation" value="{{old('designation')}}" class="form-control" required placeholder="Enter Designation" />
                                            @error('designation')
												<div class="alert alert-danger">{{$message}}</div>
												@enderror
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" required placeholder="Enter Phone Number" />
                                            @error('phone')
												<div class="alert alert-danger">{{$message}}</div>
												@enderror
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Address</label>
                                            <div>
                                                <textarea name="address" required class="form-control" rows="5" placeholder="Eneter Parmanent Address">{{old('address')}}</textarea>
                                            </div>
                                            @error('address')
												<div class="alert alert-danger">{{$message}}</div>
												@enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <div>
                                            <input name="photo" type="file" value="{{old('photo')}}" class="form-control"  placeholder="upload  image" />
                                            </div>
                                            @error('photo')
												<div class="alert alert-danger">{{$message}}</div>
												@enderror
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control" required placeholder="Enter Email" />
                                            @error('email')
												<div class="alert alert-danger">{{$message}}</div>
												@enderror
                                        </div>
                                     

                                        <div class="form-group mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    
                    </div>

<!-- container-fluid -->

</div>

@endsection