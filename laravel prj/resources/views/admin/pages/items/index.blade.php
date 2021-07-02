@extends('admin.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
    <style>
        .btn-create {
            padding: 4px 8px;
            margin-right: 16px;
            border-radius: 12%
        }

        .t-alert {
            position: fixed;
            margin: 0 auto;
            top: 50%;
            width: 50%;
            height: 70px;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 99999;
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
                        <h1>Manager Items</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager Item</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <a class="btn btn-primary btn-sm btn-create" href="{{ asset('admin-mo/item/create') }}">Create</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Feature</th>
                                <th>Discount(%)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->type->brand->name }}</td>
                                    <td>{{ $item->type->name }}</td>
                                    <td>{{ $item->name }}</td>
                                    @if ($item->images[0]->img)
                                        <td><img src="{{ asset('customer/img') . '/' . $item->images[0]->img }}" alt=""
                                                width="50px" height="50px">
                                        </td>
                                    @else
                                        <td><img src="{{ asset('admin/images') . '/no_image.png' }}" alt="" width="50px"
                                                height="50px">
                                        </td>
                                    @endif
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        @if ($item->feature == 1)
                                            <b>hot</b>
                                        @else
                                            normal
                                        @endif
                                    </td>
                                    <td>{{ $item->discout_item }}%</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt"></i>Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="javascript:void(0);">
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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
@section('scripts')
    {{-- jquery.autocomplete.js --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
    {{-- quick defined --}}
    <script>
        function onDeleteBrand(id) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/brand/delete/' + id;
            }
        }
    </script>
@stop
