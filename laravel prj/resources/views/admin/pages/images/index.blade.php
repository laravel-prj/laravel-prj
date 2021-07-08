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

    </style>
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manager Images</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager Images</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-tools">
                </div>
                <div class="card-header">
                    <div class="row justify-content-end">
                        <div class="col-sm-auto">
                            <a class="btn btn-warning" href="{{ asset("admin-mo/images/createMul/item/$itemId") }}"><i
                                    class="fa fa-plus-square" aria-hidden="true"></i> <i class="fa fa-plus-square"
                                    aria-hidden="true"></i> Multi Images</a>
                        </div>
                        <div class="col-sm-auto">
                            <a class="btn btn-primary" href="{{ asset("admin-mo/images/create/item/$itemId") }}"><i
                                    class="fa fa-plus" aria-hidden="true"></i> Create</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTable">
                                @foreach ($images as $image)
                                    <tr>
                                        @if ($image->default_img == 1)
                                            <td>Default</td>
                                        @else
                                            <td>Normal</td>
                                        @endif
                                        <td><img src="{{ asset('customer/img') . '/' . $image->img }}" alt="" width="200"
                                                height="300px">
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="javascript:void(0);"
                                                onclick="return onEditImage({{ $itemId }}, {{ $image->id }});">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                                onclick="return onDeleteImage({{ $image->id }});">
                                                <i class="fas fa-trash"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
    </div>
@stop
@section('scripts')
    <script>
        function onEditImage(itemId, imageId) {
            location.href = '/admin-mo/images/update/item/' + itemId + '/' + imageId;
        }

        function onDeleteImage(imageId) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/images/delete/' + imageId;
            }
        }
    </script>
@stop
