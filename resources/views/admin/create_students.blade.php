@extends('template.dashboard_admin')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard | Create Students</title>
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
        <!-- Display success alert if it exists -->
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">Create Student</h6>
            </div>
            <div class="card-body">
                <form method="post" action="
                    @if(isset($student))
                        {{ route('admin.update_students', $student->id) }}
                    @else
                        {{ route('admin.create_students') }}
                    @endif">
                    @csrf
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label" for="firstName">First Name<span class="text-danger ml-2">*</span></label>
                            <input type="text" class="form-control" name="firstName" id="firstName" value="{{ isset($student) ? $student->firstName : '' }}" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label" for="lastName">Last Name<span class="text-danger ml-2">*</span></label>
                            <input type="text" class="form-control" name="lastName" id="lastName" value="{{ isset($student) ? $student->lastName : '' }}" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label" for="admissionNum">Admission Number<span class="text-danger ml-2">*</span></label>
                            <input type="text" class="form-control" name="admissionNum" id="admissionNum" value="{{ isset($student) ? $student->admissionNum : '' }}" placeholder="Admission Number">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label" for="classId">Select Class<span class="text-danger ml-2">*</span></label>
                            <select class="form-control" name="classId" id="classId">
                                @foreach($classes as $class)
                                <option value="{{ isset($class) ? $class->id : '' }}">{{ $class->className }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label" for="blockId">Select Block<span class="text-danger ml-2">*</span></label>
                            <select class="form-control" name="blockId" id="blockId">
                                @foreach($blocks as $block)
                                <option value="{{ isset($block) ? $block->id : '' }}">{{ $block->blockName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="save" class="btn"style="background-color: #0C24DB; color:#fff;">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-12">
        <!-- Display success alert if it exists -->
        @if(session('delete_success'))
        <div class="alert alert-success" role="alert">
            {{ session('delete_success') }}
        </div>
        @endif
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">All Students</h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Admission Number</th>
                            <th>Class</th>
                            <th>Block</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
                                <a href="{{ route('admin.edit_student', $student->id) }}" class="btn btn-sm"style="background-color: #0C24DB; color:#fff;">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.delete_student', $student->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
