@extends('admin.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
    <style>
        .edit {
            margin-top: 30px;
            margin-left: 50px;

        }

        .brand {
            width: 50%;
        }

        input[type="file"] {
            display: block;
        }

        .imageThumb {
            max-height: 300px;
            max-width: 250px;
            border: 2px solid;
            padding: 1px;
            cursor: pointer;
        }

        .pip {
            display: inline-block;
            margin: 10px 10px 0 0;
        }

        .remove {
            display: block;
            background: #444;
            border: 1px solid black;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .remove:hover {
            background: white;
            color: black;
        }

        #defaultThumbnail {
            padding: 15px 0;
        }

    </style>
@stop
@section('content')
    <div class="content-wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                {!! \Session::get('error') !!}
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">BRANDS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manager Brands</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!------ Include the above in your HEAD tag ---------->
                <form method="POST" action="/admin-mo/brand/update/{{ $brand->id }}">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-auto col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name_fr" name="name"
                                value="{{ $brand->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <div id="defaultThumbnail">
                                <span class="pip"><img class="imageThumb"
                                        src="{{ asset('customer/img') . '/' . $brand->img }}">
                                    <br /><span class="remove" onclick="return onEditImage({{ $brand->id }});">Edit
                                        Image</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="submit" value="Update" class="btn btn-success">
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@stop
@section('scripts')
    <script>
        function onEditImage(brandId) {
            location.href = '/admin-mo/brand/editImage/' + brandId;
        }
    </script>
@stop
