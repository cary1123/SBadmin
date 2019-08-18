@extends('layouts.master')

@section('page-title', '系統首頁')

@section('page-content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <h1>新增</h1>

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>錯誤！</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{ route('SbAdmin.store') }}" method="POST">

                    {{ csrf_field() }}
                    <div class="row">
                        <section class="col col-6">
                            <label class="label">Name</label>
                            <label class="input">
                                <input type="text" name="Name" id="Name" value="" placeholder="名稱" >
                            </label>
                        </section>

                        <section class="col col-6">
                            <label class="label">Position</label>
                            <label class="input">
                                <input type="text" name="Position" id="Position" value="" placeholder="Position">
                            </label>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-6">
                            <label class="label">Office</label>
                            <label class="input">
                                <input type="text" name="Office" id="Office" value="" placeholder="Office" >
                            </label>
                        </section>

                        <section class="col col-6">
                            <label class="label">Age</label>
                            <label class="input">
                                <input type="text" name="Age" id="Age" value="" placeholder="Age">
                            </label>
                        </section>
                    </div>
                    <div class="row">
                        <section class="col col-6">
                            <label class="label">Start Date</label>
                            <label class="input">
                                <input type="text" name="StartDate" id="StartDate" value="" placeholder="Start Date" >
                            </label>
                        </section>

                        <section class="col col-6">
                            <label class="label">Salary</label>
                            <label class="input">
                                <input type="text" name="Salary" id="Salary" value="" placeholder="Salary">
                            </label>
                        </section>
                    </div>
                    <button type="submit" class="btn btn-primary">儲存</button>
                </form>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection