@extends('admin.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
    <style>
        .create {
            margin-top: 30px;
            margin-left: 50px;
        }

        .brand {
            width: 50%;
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
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">ITEM</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manager Item</li>
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
                <form method="POST" action="/admin-mo/item/store">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-auto col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name_fr" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-auto col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name_fr" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-auto col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name_fr" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-auto col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name_fr" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="submit" value="Create" class="btn btn-success">
                        </div>
                    </div>
                    @csrf
                </form>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@stop
@section('scripts')
    <script>
    </script>
@stop
