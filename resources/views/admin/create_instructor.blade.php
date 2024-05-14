@extends('template.dashboard_admin')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard | Create Instructor</title>
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
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">Create Instructor</h6>
            </div>
            <div class="card-body">
                <form method="post" action="
                    @if(isset($instructor))
                        {{ route('admin.update_instructor', $instructor->id) }}
                    @else
                        {{ route('admin.create_instructor') }}
                    @endif">
                    @csrf
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label" for="instructorId">Select Instructor<span class="text-danger ml-2">*</span></label>
                            <select class="form-control" name="instructorId" id="instructorId">
                                @foreach($users as $user)
                                @if($user->role == 'instructor')
                                <option value="{{ isset($user) ? $user->id : '' }}">{{ $user->firstName }} {{ $user->lastName }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label" for="phoneNum">Phone Number<span class="text-danger ml-2">*</span></label>
                            <input type="text" class="form-control" name="phoneNum" id="phoneNum" value="{{ isset($instructor) ? $instructor->phoneNum : '' }}" placeholder="Phone Number">
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
                    <button type="submit" name="save" class="btn" style="background-color: #0C24DB; color:#fff;">Save</button>
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
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">All Instructors</h6>
            </div>
            <div class="table-responsive p-3">
                <table id="dataTableHover" class="table table-hover dataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Instructor Name</th>
                            <th>Phone Number</th>
                            <th>Class</th>
                            <th>Block</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($instructors as $instructor)
                        @if($instructor->phoneNo != null && $instructor->class->className != null && $instructor->block->blockName != null)
                        <tr>
                            <td>{{ $instructor->id }}</td>
                            <td>{{ $instructor->user->firstName }} {{ $instructor->user->lastName }}</td>
                            <td>{{ $instructor->phoneNo }}</td>
                            <td>{{ $instructor->class->className }}</td>
                            <td>{{ $instructor->block->blockName }}</td>
                            <td>
                                <a href="{{ route('admin.edit_instructor', $instructor->id) }}" class="btn"style="background-color: #0C24DB; color:#fff;">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.delete_instructor', $instructor->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endif
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
