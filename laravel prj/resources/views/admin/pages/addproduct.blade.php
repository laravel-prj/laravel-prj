@extends('admin.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
    <style>
        .preview-images-zone {
            width: 100%;
            border: 1px solid #ddd;
            min-height: 180px;
            /* display: flex; */
            padding: 5px 5px 0px 5px;
            position: relative;
            overflow: auto;
        }

        .preview-images-zone>.preview-image:first-child {
            height: 185px;
            width: 185px;
            position: relative;
            margin-right: 5px;
        }

        .preview-images-zone>.preview-image {
            height: 90px;
            width: 90px;
            position: relative;
            margin-right: 5px;
            float: left;
            margin-bottom: 5px;
        }

        .preview-images-zone>.preview-image>.image-zone {
            width: 100%;
            height: 100%;
        }

        .preview-images-zone>.preview-image>.image-zone>img {
            width: 100%;
            height: 100%;
        }

        .preview-images-zone>.preview-image>.tools-edit-image {
            position: absolute;
            z-index: 100;
            color: #fff;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            display: none;
        }

        .preview-images-zone>.preview-image>.image-cancel {
            font-size: 18px;
            position: absolute;
            top: 0;
            right: 0;
            font-weight: bold;
            margin-right: 10px;
            cursor: pointer;
            display: none;
            z-index: 100;
        }

        .preview-image:hover>.image-zone {
            cursor: move;
            opacity: .5;
        }

        .preview-image:hover>.tools-edit-image,
        .preview-image:hover>.image-cancel {
            display: block;
        }

        .ui-sortable-helper {
            width: 90px !important;
            height: 90px !important;
        }

        .container {
            padding-top: 50px;
        }

    </style>
@stop
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">PRODUCTS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{asset('/admin-mo')}}">Dashboard</a></li>
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
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <!-- Form Name -->
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label">shop</label>
                            <div class="col-md-12">
                                <select id="product_categorie" name="shop" class="form-control">
                                    @foreach ($shops as $shop)
                                        <option value="{{ $shop->id }}" selected>{{ $shop->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label">item name</label>
                            <div class="col-md-12">
                                <input id="product_name_fr" name="item_name" class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-12 control-label">producer</label>
                            <div class="col-md-12">
                                <select id="product_categorie" name="type" class="form-control">
                                    @foreach ($types as $type)
                                        <option value="">{{ strtoupper($type->producer->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-12 control-label">type</label>
                            <div class="col-md-12">
                                <select id="product_categorie" name="type" class="form-control">
                                    @foreach ($types as $type)
                                        <option value="">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label">quantity</label>
                            <div class="col-md-12">
                                <input id="available_quantity" name="quantity" class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label">price</label>
                            <div class="col-md-12">
                                <input id="product_weight" name="price" class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12 control-label">feature</label>
                            <div class="col-md-12">
                                <select id="product_categorie" name="feature" class="form-control">
                                    <option value="0" selected>binh thuong</option>
                                    <option value="1">pho bien</option>
                                </select>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="product_name_fr">discount</label>
                            <div class="col-md-12">
                                <select id="product_categorie" name="discount" class="form-control">
                                    <option value="10" selected>10%</option>
                                    <option value="20">20%</option>
                                    <option value="30">30%</option>
                                    <option value="40">40%</option>
                                </select>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                                    <input type="file" id="pro-image" name="pro-image" style="display: none;"
                                        class="form-control" multiple>
                                </fieldset>
                                <div class="preview-images-zone">
                                </div>
                            </div>
                        </div>


                        <!-- Button -->
                        <div class="form-group" style="margin-bottom: 100px">
                            <div class="col-md-12">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
                            </div>
                        </div>

                    </fieldset>
                    {{ csrf_field() }}
                </form>
            </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@stop
@section('scripts')
    <script>
        $(document).ready(function() {
            document.getElementById('pro-image').addEventListener('change', readImage, false);

            $(".preview-images-zone").sortable();

            $(document).on('click', '.image-cancel', function() {
                let no = $(this).data('no');
                $(".preview-image.preview-show-" + no).remove();
            });
        });

        var num = 4;

        function readImage() {
            if (window.File && window.FileList && window.FileReader) {
                var files = event.target.files; //FileList object
                var output = $(".preview-images-zone");

                for (let i = 0; i < files.length; i++) {
                    var file = files[i];
                    if (!file.type.match('image')) continue;

                    var picReader = new FileReader();

                    picReader.addEventListener('load', function(event) {
                        var picFile = event.target;
                        var html = '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result +
                            '"></div>' +
                            '<div class="tools-edit-image"></div>' +
                            '</div>';

                        output.append(html);
                        num = num + 1;
                    });

                    picReader.readAsDataURL(file);
                }
                $("#pro-image").val('');
            } else {
                console.log('Browser not support');
            }
        }
    </script>
@stop


{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
