@extends('template.dashboard_instructor')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard | View Students</title>
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

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Class Attendance</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Class Attendance</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold"style="color: #0C24DB;">View Class Attendance</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('view_attendance') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <div class="col-xl-6">
                                <label class="form-control-label">Select Date<span class="text-danger ml-2">*</span></label>
                                <input type="date" class="form-control" name="dateTaken" id="dateTaken" placeholder="Select Date">
                            </div>
                        </div>
                        <button type="submit" name="view" class="btn" style="background-color: #0C24DB; color:#fff;">View Attendance</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">Class Attendance</h6>
                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Admission Number</th>
                                        <th>Class</th>
                                        <th>Block / Section</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attendances as $attendance)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $attendance->student->firstName }}</td>
                                        <td>{{ $attendance->student->lastName }}</td>
                                        <td>{{ $attendance->student->admissionNum }}</td>
                                        <td>{{ $attendance->student->class->className }}</td>
                                        <td>{{ $attendance->student->block->blockName }}</td>
                                        <td>{{ $attendance->status }}</td>
                                        <td>{{ $attendance->created_at }}</td>
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
</div>
@endsection

@section('scripts')
<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTableHover').DataTable();
    });
</script>
@endsection
