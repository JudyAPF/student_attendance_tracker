@extends('template.dashboard_instructor')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard</title>
<!-- Bootstrap CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome CSS -->
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<!-- Your custom CSS -->
<link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
<!-- Favicon -->
<link rel="icon" href="{{ asset('images/logo/attnlg.jpg') }}">
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <div class="card mb-4" style="width: 50%;">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Instructor Dashboard</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-primary text-white h-100">
                        <a class="nav-link" href="{{ route('view_students') }}" style="color: #fff;">
                            <div class="card-body">
                                <div class="text-uppercase small font-weight-bold">VIEW STUDENTS</div>
                                <div class="text-value
                                    h1"></div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-info text-white h-100">
                        <a class="nav-link" href="{{ route('take_attendance') }}" style="color: #fff;">
                            <div class="card-body">
                                <div class="text-uppercase small font-weight-bold">TAKE ATTENDANCE</div>
                                <div class="text-value
                                    h1"></div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-success text-white h-100">
                        <a class="nav-link" href="{{ route('view_attendance') }}" style="color: #fff;">
                            <div class="card-body">
                                <div class="text-uppercase small font-weight-bold">VIEW CLASS ATTENDANCE</div>
                                <div class="text-value
                                    h1"></div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-danger text-white h-100">
                        <a class="nav-link" href="{{ route('view_attendance_form') }}" style="color: #fff;">
                            <div class="card-body">
                                <div class="text-uppercase small font-weight-bold">VIEW STUDENT ATTENDANCE</div>
                                <div class="text-value
                                    h1"></div>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
