@extends('admin.layout')

@section('title')
    Homes
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
                            <li class="breadcrumb-item"><a href="#">Homes</a></li>
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
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">

                                    <tbody>
                                        <tr>
                                            <th>Title(en)</th>
                                            <td>{{ $home->title('en') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Title(ar)</th>
                                            <td>{{ $home->title('ar') }}</td>
                                        </tr>
                                        <tr>
                                            <th>bio(en)</th>
                                            <td>{{ $home->bio('en') }}</td>
                                        </tr>
                                        <tr>
                                            <th>bio(ar)</th>
                                            <td>{{ $home->bio('ar') }}</td>
                                        </tr>
                                        <tr>
                                            <th>img</th>
                                            <td><img src="{{ asset("uploads/$home->img") }}" width='100px' alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>links</th>
                                            <td>
                                                @isset($social)
                                                    <a href="{{ url("$social->facebook") }}" class="btn">
                                                        <i class="fab fa-facebook-f text-secondary"></i>
                                                    </a>
                                                    <a href="{{ url("$social->twitter") }}" class="btn">
                                                        <i class="fab fa-twitter text-secondary"></i>
                                                    </a>
                                                    <a href="{{ url("$social->instagram") }}" class="btn">
                                                        <i class="fab fa-instagram text-secondary"></i>
                                                    </a>
                                                @endisset
                                            </td>
                                        </tr>
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
