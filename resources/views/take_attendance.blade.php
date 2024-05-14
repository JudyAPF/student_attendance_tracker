@extends('template.dashboard_instructor')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard | Take Attendance</title>
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
        <h1 class="h3 mb-0 text-gray-800">Take Attendance</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Take Attendance</li>
        </ol>
    </div>
    <div class="row mb-3">
        <div class="col-lg-12">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">
                        Take Attendance
                    </h6>
                </div>
                <div class="table-responsive p-3">
                    <form action="{{ route('take_attendance') }}" method="post">
                        @csrf
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Admission Number</th>
                                    <th>Class</th>
                                    <th>Block</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->firstName }}</td>
                                    <td>{{ $student->lastName }}</td>
                                    <td>{{ $student->admissionNum }}</td>
                                    <td>{{ $student->class->className }}</td>
                                    <td>{{ $student->block->blockName }}</td>
                                    <td>
                                        <select name="status_{{ $student->id }}">
                                            <option value="present" selected>Present</option>
                                            <option value="absent">Absent</option>
                                            <option value="excused">Excused</option>
                                        </select>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table><br>
                        <div class="text-center">
                            <button type="submit" class="btn" style="background-color: #0C24DB; color:#fff;">Save</button>
                        </div>
                    </form>
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
