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
                        <h1 class="m-0">Manager Info {{ $item->name }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manager Info {{ $item->name }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <div class="row">
                @foreach ($item->images as $img)
                    <div class="col-sm-2">
                        <img src="{{ asset('customer/img') . '/' . $img->img }}" alt="" width="250px" height="300px">
                    </div>
                @endforeach
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!------ Include the above in your HEAD tag ---------->
                <form method="post" action="/admin-mo/itemDetail/store">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-2 col-form-label">Size</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="size" name="size" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-2 col-form-label">Quantity</label>
                        <div class="col-sm-3">
                            <input type="number" min="1" max="9999999999" class="form-control" id="quantity" name="quantity"
                                value="">
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="item_id" value="{{ $item->id }}">
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
