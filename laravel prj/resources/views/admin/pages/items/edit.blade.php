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
                <form method="post">
                    <div class="form-group row">
                        <label for="brandSearch" class="col-2 col-form-label">Brand</label>
                        <div class="col-sm-3">
                            <select id="brandSearch" class="form-control" name="brand">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" @if ($item->type->brand->id == $brand->id) selected @endif>
                                        {{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="typeSearch" class="col-2 col-form-label">Type</label>
                        <div class="col-sm-3">
                            <select id="typeSearch" class="form-control" name="type">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" @if ($item->type->id == $type->id) selected @endif>
                                        {{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-2 col-form-label">Name</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="product_name_fr" name="name"
                                value="{{ $item->name }}">
                        </div>
                    </div>
                    <div class="form-group" id="fileImages">
                        <label for="files" class="col-2 col-form-label px-0">Images</label>
                        @foreach ($item->images as $img)
                            <span class="pip">
                                <img class="imageThumb" src="{{ asset("customer/img/$img->img") }}"><br />
                            </span>
                        @endforeach
                        <a type="button" class="btn btn-info" onclick="return onEditImages({{ $item->id }});">Edit
                            Images</a>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-2 col-form-label">Description</label>
                        <div class="col-sm-3">
                            <textarea name="description" id="description" cols="45"
                                rows="4">{{ $item->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-2 col-form-label">Price</label>
                        <div class="col-sm-3">
                            <input type="number" min="0" class="form-control" id="price" name="price"
                                value="{{ $item->price }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-2 col-form-label">Feature</label>
                        <div class="col-sm-3">
                            <select id="feature" class="form-control" name="feature">
                                <option value="0" @if ($item->feature == 0) selected @endif>Normal</option>
                                <option value="1" @if ($item->feature == 1) selected @endif>Hot</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-2 col-form-label">Discout Item(%)</label>
                        <div class="col-sm-3">
                            <input type="number" min="0" max="100" class="form-control" id="discount" name="discout_item"
                                value="{{ $item->discout_item }}">
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                <div class="col-md-12">
                    <input type="submit" value="Update" class="btn btn-success">
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
        var brandSearch;
        var typeIdSearch = {{ $item->type->id }};
        console.log();
        $("#brandSearch")
            .change(function() {
                console.log();
                brandSearch = $(this).val();
                $.ajax({
                    type: "GET",
                    url: window.location.origin + "/api/ajaxGetTypeByBrandId",
                    data: {
                        brandSearch: brandSearch,
                        flg: true,
                        typeIdSearch: typeIdSearch
                    },
                    success: function(response) {
                        if (response) {
                            $('#typeSearch').html(response);
                        }
                    }
                });

                // $.ajax({
                //     type: "GET",
                //     url: window.location.origin + "/api/ajaxSearchBrandById",
                //     data: {
                //         brandSearch: brandSearch
                //     },
                //     success: function (response) {
                //         if (response) {
                //             $('#bodyTable').html(response);
                //         }
                //     }
                // });
            })
            .change();

        function onEditImages(itemId) {
            location.href = '/admin-mo/images/item/' + itemId;
        }
    </script>
@stop
