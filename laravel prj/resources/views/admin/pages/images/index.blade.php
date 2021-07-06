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
            <div class="container-fluid">
                <!------ Include the above in your HEAD tag ---------->
                <form enctype="multipart/form-data" method="post" action="/admin-mo/item/updateImages">
                    <div class="form-group">
                        <label for="file" class="col-auto col-form-label px-0">Image Default</label>
                        <input required type="file" class="form-control-file px-0" id="file" name="file">
                        <div id="defaultThumbnail">
                            <span class="pip"><img class="imageThumb"
                                    src="{{ asset("customer/img/$imageDefault->img") }}"></span>
                        </div>
                    </div>
                    <div class="form-group" id="fileImages">
                        <label for="files" class="col-2 col-form-label px-0">Images</label>
                        <input required type="file" class="form-control-file px-0" id="files" name="files[]" multiple
                            disabled>
                        <div id="imagesThumbnail">
                            @foreach ($images as $image)
                                <span class="pip"><img class="imageThumb"
                                        src="{{ asset("customer/img/$image->img") }}"></span>
                            @endforeach
                            <a id="removeAll" type="button" class="btn btn-danger">Clear Images</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        {{-- <input type="hidden" name="shop_id" value="{{ $shop->id }}"> --}}
                        <div class="col-md-12">
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </section>
    </div>
@stop
@section('scripts')
    {{-- jquery.autocomplete.js --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
    {{-- quick defined --}}
    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").click(function(e) {
                    if ($("#files").val() !== '') {
                        $('#fileImages .pip').remove();
                        $('#files').val("");
                    }
                    if ($('imagesThumbnail').html() !== '') {
                        $('#fileImages .pip').remove();
                        $('#files').val("");
                    }
                });


                $("#files").on("change", function(e) {
                    $('#files').attr('disabled', true);

                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/>").insertAfter("#files");
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                                // console.log($('#files'));
                                // $('#files').val("");
                            });

                            // Old code here
                            /*$("<img></img>", {
                              class: "imageThumb",
                              src: e.target.result,
                              title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                });

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
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/>";
                            $('#defaultThumbnail').html($defaultImg);

                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                                $('#file').val("");
                            });
                        });
                        fileReader.readAsDataURL(f);
                    }
                });

                $("#removeAll").click(function() {
                    var ok = confirm('Hành động này sẽ xóa tất cả Images');
                    if (ok) {
                        $('#fileImages .pip').remove();
                        $('#files').val("");
                        $('#files').attr('disabled', false);
                    }

                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
@stop
