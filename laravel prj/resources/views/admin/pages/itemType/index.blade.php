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
            border-radius: 50%
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

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manager ItemTypes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager ItemTypes</li>
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
                    <h3 class="card-title">Item Type</h3>
                    <div class="card-tools">
                        <a class="btn btn-primary btn-sm btn-create"
                            href="{{ asset('admin-mo/itemType/getCreate') }}">Create</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 25%">
                                    id
                                </th>
                                <th style="width: 25%;">
                                    brand
                                </th>
                                <th style="width: 25%;">
                                    type
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($type as $item)
                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->brand->name}}</td>
                                    <td>{{ $item->name}}</td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm"
                                            href="{{ asset("admin-mo/itemType/update/$item->id") }}">
                                            <i class="fas fa-pencil-alt"></i>Edit
                                        </a>
                                        {{-- <a class="btn btn-danger btn-sm"
                                            href="{{ asset("admin-mo/brand/delete/$item->id") }}">
                                            <i class="fas fa-trash"></i>Delete
                                        </a> --}}
                                        <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                            onclick="return onDeleteType({{ $item->id }});">
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
        function onDeleteType(id) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/itemType/delete/' + id;
            }
        }
    </script>
@stop
