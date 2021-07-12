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
                        <h1 class="m-0">Image {{ $item->name }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manager Image {{ $item->name }}</li>
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
                <form enctype="multipart/form-data" method="post">
                    @if ($flg)
                        <div class="form-group">
                            <select id="default_img" class="form-control" name="default_img">
                                <option value="1" @if ($img->default_img == 1) selected @endif>Default</option>
                                <option value="0" @if ($img->default_img == 0) selected @endif>Normal</option>
                            </select>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="file" class="col-auto col-form-label px-0">Image Default</label>
                        {{-- <input required type="file" class="form-control-file px-0" id="file" name="file"> --}}
                        <div id="defaultThumbnail">
                            <span class="pip"><img class="imageThumb" src="{{ asset('customer/img') . '/' . $img->img }}"
                                    width="200px" height="300px"><br /><span class="remove"
                                    onclick="return onEditImage({{ $item->id }},{{ $img->id }});">Edit Image</span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        {{-- <input type="hidden" name="item_id" value="{{ $itemId }}"> --}}
                        @if ($flg)
                            <div class="col-md-12">
                                <input type="submit" value="Update" class="btn btn-success">
                            </div>
                        @endif
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
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#file").on("change", function(e) {
                    var files = e.target.files,
                        fileLength = files.length;
                    for (var i = 0; i < fileLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $defaultImg = "<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>";
                            $('#defaultThumbnail').html($defaultImg);
                        });
                        fileReader.readAsDataURL(f);
                    }
                });

            } else {
                alert("Your browser doesn't support to File API")
            }
        });

        function onEditImage(itemId, imgId) {
            location.href = `/admin-mo/images/updateImg/${itemId}/${imgId}`;
        }
    </script>
@stop
