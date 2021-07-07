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
            margin-right: 19px;
            border-radius: 12%;
            right: 0;
            position: absolute;
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
                        <h1>Manager Info {{ $item->name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager Info {{ $item->name }}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="row">
                @foreach ($item->images as $img)
                    <div class="col-sm-2">
                        <img src="{{ asset('customer/img') . '/' . $img->img }}" alt="" width="200px" height="300px">
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-primary float-right"
                        href="{{ asset('admin-mo/itemDetail/create/' . $item->id) }}">Create</a>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-tools">
                </div>
                <div class="card-header">
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTable">
                                @foreach ($itemDetails as $itemDetail)
                                    <tr>
                                        <td>{{ $itemDetail->size }}</td>
                                        <td>{{ $itemDetail->quantity }}</td>
                                        <td style="width: 220px">
                                            <a class="btn btn-info btn-sm"
                                                href="{{ asset("admin-mo/itemDetail/update/$item->id/$itemDetail->id") }}">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                                onclick="return onDeteleDetail({{ $itemDetail->id }});">
                                                <i class="fas fa-trash"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
@section('scripts')
    <script>
        function onDeteleDetail(detailId) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/itemDetail/delete/' + detailId;
            }
        }
    </script>
@stop
