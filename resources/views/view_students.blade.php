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
        <h1 class="h3 mb-0 text-gray-800">All Students</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Students</li>
        </ol>
    </div>
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">All Students</h6>
                </div>
                <div class="table-responsive p-3">
                    <div id="dataTableHover_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="dataTableHover_length">
                                    <label for="dataTableHover_length_select">
                                        Show entries
                                        <select id="dataTableHover_length_select" name="dataTableHover_length" aria-controls="dataTableHover" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTableHover_filter" class="dataTables_filter">
                                    <label>
                                        Search:
                                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTableHover">
                                    </label>
                                </div>
                            </div>
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
