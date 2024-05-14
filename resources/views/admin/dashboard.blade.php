@extends('template.dashboard_admin')

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
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">Dashboard</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-primary text-white h-100">
                            <a href="{{ route('admin.create_class') }}" style="color: white; text-decoration:none;">
                                <div class="card-body">
                                    <div class="text-uppercase small font-weight-bold">
                                        Create Class </div>
                                    <!-- <div class="text-value
                                    h1">
                                </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-info text-white h-100">
                            <a href="{{ route('admin.create_block') }}" style="color: white; text-decoration:none;">
                                <div class="card-body">
                                    <div class="text-uppercase small font-weight-bold">Create Block/Section</div>
                                    <!-- <div class="text-value
                                    h1">

                                </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-success text-white h-100">
                        <a href="{{ route('admin.create_instructor') }}" style="color: white; text-decoration:none;">
                            <div class="card-body">
                                <div class="text-uppercase small font-weight-bold">Create Instructor</div>
                                <!-- <div class="text-value
                                    h1">

                                </div> -->
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-danger text-white h-100">
                            <a href="{{ route('admin.create_students') }}" style="color: white; text-decoration:none;">
                            <div class="card-body">
                                <div class="text-uppercase small font-weight-bold">Create Students</div>
                                <!-- <div class="text-value
                                    h1">

                                </div> -->
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
