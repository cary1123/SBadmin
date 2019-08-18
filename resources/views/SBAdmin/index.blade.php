@extends('layouts.master')

@section('page-title', '系統首頁')

@section('page-content')
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!-- Icon Cards-->
            <div class="row">
            @foreach($posts as $post)
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-{{ $post->bgcolor }} o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">{{ $post->title }}</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                        </a>
                    </div>
                </div>
            @endforeach
            </div>

            <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-chart-area"></i>
                    Area Chart Example</div>
                <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Table Example
                    <a href="{{ route('SbAdmin.create') }}" class="btn btn-info">新增</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>功能</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>功能</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($tables as $data)
                                <tr>
                                    <td>{{ $data->Name }}</td>
                                    <td>{{ $data->Position }}</td>
                                    <td>{{ $data->Office }}</td>
                                    <td>{{ $data->Age }}</td>
                                    <td>{{ $data->StartDate }}</td>
                                    <td>{{ $data->Salary }}</td>
                                    <td>
                                        <a href="{{ route('SbAdmin.edit', $data->id) }}" class="btn btn-info">編輯</a>
                                        <form action="{{ route('SbAdmin.destroy', $data->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                              <button type="submit" class="btn btn-danger">刪除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

        @include('layouts.partials.footer')
    </div>
    <!-- /.content-wrapper -->
@endsection