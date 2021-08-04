@extends('admin.layout')

@section('title')
    Home
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Categories</h3>
                                @include('admin.inc.msgs')

                                <div class="card-tools">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#add-modal">
                                        Add New Slide
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title(en)</th>
                                            <th>Title(ar)</th>
                                            <th>bio(en)</th>
                                            <th>bio(ar)</th>
                                            <th>img</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($homes as $home)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $home->title('en') }}</td>
                                                <td>{{ $home->title('ar') }}</td>
                                                <td>{{ $home->bio('en') }}</td>
                                                <td>{{ $home->bio('ar') }}</td>
                                                <td><img src="{{ asset("uploads/$home->img") }}" width='100px' alt="">
                                                </td>
                                                <td class="d-flex align-items-center justify-content-center">
                                                    <a href="{{ url("/dashboard/homes/show/$home->id") }}"
                                                        class="btn p-1 text-secondary ">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <button type="button" class="btn p-1 btn-form-data text-primary"
                                                        data-toggle="modal" data-target="#edit-modal"
                                                        data-home_id="{{ $home->id }}"
                                                        data-title_en="{{ $home->title('en') }}"
                                                        data-title_ar="{{ $home->title('ar') }}"
                                                        data-bio_en="{{ $home->bio('en') }}"
                                                        data-bio_ar="{{ $home->bio('ar') }}"
                                                        data-home_id="{{ $home->id }}">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                    </button>
                                                    <form id="delete-form" style="display: none"
                                                        action="{{ url('/dashboard/homes/delete') }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="deleted_id" id="deleted_id">
                                                    </form>
                                                    <button type="submit" form="delete-form"
                                                        class="btn btn-delete p-1 text-danger"
                                                        data-home_delete_id="{{ $home->id }}">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-center py-3">
                                    {{-- {{ $cats->links() }} --}}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('modal')
    <!-- modal -->
    <div class="add-modal">
        <div class="modal fade" id="add-modal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Slide</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="modal-form" method="POST" action="{{ url('/dashboard/homes/store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> title(en) </label>
                                            <input type="text" name="title_en" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> title(ar) </label>
                                            <input type="text" name="title_ar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Bio(en) </label>
                                            <input type="text" name="bio_en" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Bio(ar) </label>
                                            <input type="text" name="bio_ar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input class="" name="img" type="file" id="formFile">
                                        </div>
                                    </div>

                                </div>
                        </form>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" form="modal-form">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    {{-- edite modal --}}

    <div class="edit-modal">
        <div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Homes</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        @include('admin.inc.msgs')

                        <form id="modal-form-edit" method="POST" enctype="multipart/form-data"
                            action="{{ url('dashboard/homes/update') }}">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="id" id="home_id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> name(en) </label>
                                            <input type="text" id="edit-title_en" name="title_en" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> name(ar) </label>
                                            <input type="text" id="edit-title_ar" name="title_ar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> bio(en) </label>
                                            <input type="text" id="edit-bio_en" name="bio_en" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> bio(ar) </label>
                                            <input type="text" id="edit-bio_ar" name="bio_ar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <input class="form-control" name="img" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" form="modal-form-edit">update</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.btn-form-data').click(function(e) {
            e.preventDefault();
            let home_id = $(this).attr('data-home_id')
            let title_en = $(this).attr('data-title_en');
            let title_ar = $(this).attr('data-title_ar');
            let bio_en = $(this).attr('data-bio_en');
            let bio_ar = $(this).attr('data-bio_ar');
            //set value
            $('#home_id').val(home_id);
            $('#edit-title_en').val(title_en);
            $('#edit-title_ar').val(title_ar);
            $('#edit-bio_en').val(bio_en);
            $('#edit-bio_ar').val(bio_ar);
        });
        $('.btn-delete').click(function(e) {
            let home_delete_id = $(this).attr('data-home_delete_id')
            $('#deleted_id').val(home_delete_id);
        })
    </script>
@endsection
