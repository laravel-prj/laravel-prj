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
                <div class="card-tools">
                </div>
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="brandSearch">Brand</label>
                            <select id="brandSearch" class="form-control" name="brandSearch">
                                <option value="0">All</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="typeSearch">Type</label>
                            <select id="typeSearch" class="form-control" name="typeSearch">
                                <option value="0">All</option>
                                {{-- @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="row"></div>
                            <label for="nameSearch">Name</label>
                            <input id="nameSearch" type="text" class="form-control" name="nameSearch"
                                onkeyup="return onSearchName();">
                        </div>
                        <div class="col-sm-3">
                            <a class="btn btn-primary float-right" href="{{ asset('admin-mo/item/create') }}">Create</a>
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
                            <tbody id="bodyTable">
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->type->brand->name }}</td>
                                        <td>{{ $item->type->name }}</td>
                                        <td>{{ $item->name }}</td>
                                        @if (isset($item->images[0]->img))
                                            <td><img src="{{ asset('customer/img') . '/' . $item->images[0]->img }}"
                                                    alt="" width="66.6666px" height="100px">
                                            </td>
                                        @else
                                            <td><img src="{{ asset('admin/images') . '/no_image.png' }}" alt=""
                                                    width="66.6666px" height="100px">
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
                                            <a class="btn btn-success btn-sm" href="javascript:void(0);"
                                                onclick="return onAddInfo({{ $item->id }});">
                                                <i class="fas fa-pencil-alt"></i>Add Info
                                            </a>
                                            <a class="btn btn-info btn-sm" href="javascript:void(0);"
                                                onclick="return onEditItem({{ $item->id }});">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                                onclick="return onDeleteItem({{ $item->id }});">
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
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
@section('scripts')
    {{-- jquery.autocomplete.js --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
    {{-- quick defined --}}
    <script>
        var brandSearch;
        var typeSearch;
        var nameSearch;

        String.prototype.rtrim = function(s) {
            return this.replace(new RegExp(s + "*$"), '');
        };

        $("#brandSearch")
            .change(function() {
                $('#nameSearch').val('');
                brandSearch = $(this).val();
                $.ajax({
                    type: "GET",
                    url: window.location.origin + "/api/ajaxGetTypeByBrandId",
                    data: {
                        brandSearch: brandSearch
                    },
                    success: function(response) {
                        if (response) {
                            $('#typeSearch').html(response);
                        }
                    }
                });

                $.ajax({
                    type: "GET",
                    url: window.location.origin + "/api/ajaxSearchBrandById",
                    data: {
                        brandSearch: brandSearch
                    },
                    success: function(response) {
                        if (response) {
                            $('#bodyTable').html(response);
                        }
                    }
                });
            })
            .change();

        $("#typeSearch")
            .change(function() {
                $('#nameSearch').val('');
                typeSearch = $(this).val();
                $.ajax({
                    type: "GET",
                    url: window.location.origin + "/api/ajaxSearchTypeById",
                    data: {
                        typeSearch: typeSearch,
                        brandSearch: brandSearch
                    },
                    success: function(response) {
                        if (response) {
                            $('#bodyTable').html(response);
                        }
                    },
                    error: function(request, status, error) {
                        $('#bodyTable').html('');
                    }
                });
            });

        function onSearchName() {
            brandSearch = $('#brandSearch').val();
            typeSearch = $('#typeSearch').val();
            nameSearch = $('#nameSearch').val();

            $.ajax({
                type: "GET",
                url: window.location.origin + "/api/ajaxSearchName",
                data: {
                    brandSearch: brandSearch,
                    typeSearch: typeSearch,
                    nameSearch: nameSearch
                },
                success: function(response) {
                    if (response) {
                        $('#bodyTable').html(response);
                        console.log(response);
                    }
                },
                error: function(request, status, error) {
                    $('#bodyTable').html('');
                }
            });
        }

        // function onDeleteBrand(id) {
        //     var ok = confirm('Are you sure about that !!!!!!');
        //     if (ok) {
        //         location.href = '/admin-mo/brand/delete/' + id;
        //     }
        // }

        function onAddInfo(itemId) {
            location.href = '/admin-mo/itemDetail/item/' + itemId;
        }

        function onDeleteItem(itemId) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/item/delete/' + itemId;
            }
        }

        function onEditItem(itemId) {
            location.href = '/admin-mo/item/update/' + itemId;
        }
    </script>
@stop
