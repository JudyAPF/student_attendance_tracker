@extends('template.dashboard_admin')

@section('meta')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard | Create Block/Section</title>
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
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">Create Block/Section</h6>
            </div>
            <div class="card-body">
                <form method="post" action="
                @if(isset($block))
                    {{ route('admin.update_block', $block->id) }}
                @else
                    {{ route('admin.create_block') }}
                @endif
                ">
                    @csrf
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
                            <label class="form-control-label" for="blockName">Block Name<span class="text-danger ml-2">*</span></label>
                            <input type="text" class="form-control" name="blockName" id="blockName" value="{{ isset($block) ? $block->blockName : '' }}" placeholder="Block Name">
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
                <h6 class="m-0 font-weight-bold" style="color: #0C24DB;">All Subjects</h6>
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
                                    <input type="text" name="search" id="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTableHover">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table align-items-center table-flush table-hover dataTable no-footer" id="dataTableHover" role="grid" aria-describedby="dataTableHover_info">
                                <thead class="thead-light">
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 46.0625px;">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Class Name: activate to sort column ascending" style="width: 168.984px;">Class Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Block Name: activate to sort column ascending" style="width: 168.984px;">Block Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 168.984px;">Status</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 108.391px;">Edit</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTableHover" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 138.562px;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blocks as $block)
                                    <tr role="row" class="odd">
                                        <td>{{ $block->id }}</td>
                                        <td>{{ $block->class->className }}</td>
                                        <td>{{ $block->blockName }}</td>
                                        <td>
                                            @if($block->isAssigned == 0)
                                            Unassigned
                                            @else
                                            Assigned
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.edit_block', $block->id) }}" class="btn" style="background-color: #0C24DB; color:#fff;">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.delete_block', $block->id) }}" class="btn btn-danger">Delete</a>
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
