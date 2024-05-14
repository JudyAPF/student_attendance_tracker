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
        <h1 class="h3 mb-0 text-gray-800">View Student Attendance</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Student Attendance</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">
                        View Student Attendance
                    </h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('view_student_attendance') }}">
                        @csrf
                        <div class="form-group row mb-3">
                            <div class="col-xl-6">
                                <label class="form-control-label">Select Student<span class="text-danger ml-2">*</span></label>
                                <select required name="studentId" class="form-control mb-3">
                                    <option value="">--Select Student--</option>
                                    @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->firstName }} {{ $student->lastName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-xl-6">
                                <label class="form-control-label">From Date<span class="text-danger ml-2">*</span></label>
                                <input type="date" name="fromDate" class="form-control mb-3">
                            </div>
                            <div class="col-xl-6">
                                <label class="form-control-label">To Date<span class="text-danger ml-2">*</span></label>
                                <input type="date" name="toDate" class="form-control mb-3">
                            </div>
                        </div>
                        <button type="submit" name="view" class="btn"style="background-color: #0C24DB; color:#fff;">View Student Attendance</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">Student Attendance</h6>
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
                        @if(isset($student_attendances))
                        @foreach($student_attendances as $student_attendance)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student_attendance->student->firstName }}</td>
                            <td>{{ $student_attendance->student->lastName }}</td>
                            <td>{{ $student_attendance->student->admissionNum }}</td>
                            <td>{{ $student_attendance->student->class->className }}</td>
                            <td>{{ $student_attendance->student->block->blockName }}</td>
                            <td>
                                @if($student_attendance->status == 'present')
                                <span class="badge badge-success">{{ $student_attendance->status }}</span>
                                @elseif($student_attendance->status == 'absent')
                                <span class="badge badge-danger">{{ $student_attendance->status }}</span>
                                @else
                                <span class="badge badge-warning">{{ $student_attendance->status }}</span>
                                @endif
                            </td>
                            <td>{{ $student_attendance->created_at }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTableHover').DataTable();

        $('select[name="type"]').change(function() {
            showDateInputs($(this).val());
        });
    });
</script>
@endsection
