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
                        <h1 class="m-0">Images</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manager Images</li>
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
                    <div class="form-group">
                        <label for="files" class="col-auto col-form-label px-0">Images Normal</label>
                        <input required type="file" class="form-control-file px-0" id="files" name="files[]" multiple>
                        <div id="normalThumbnail">
                            {{-- <span class="pip"><img class="imageThumb" src="{{ asset('customer/img') . '/' . $img->img }}"
                                    width="250px" height="300px"> --}}
                            {{-- <img src="{{ asset('customer/img') . '/' . $img->img }}" alt="" width="250px" height="300px"> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{-- <input type="hidden" name="item_id" value="{{ $itemId }}"> --}}
                        <div class="col-md-12">
                            <input type="submit" value="Multi Images" class="btn btn-warning">
                        </div>
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
                $("#files").click(function(e) {
                    if ($("#files").val() !== '') {
                        alert('Hành động này sẽ clear toàn bộ Images');
                        $('#fileImages .pip').remove();
                        $('#files').val("");
                        $('#normalThumbnail').html('');
                    }
                });


                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            // $("<span class=\"pip\">" +
                            //     "<img class=\"imageThumb\" src=\"" + e.target.result +
                            //     "\" title=\"" + file.name + "\"/>" +
                            //     "<br/>").insertAfter("#files");

                            html = "<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/>";
                            normalThumbnail;
                            // $('#normalThumbnail').html(html);
                            $('#normalThumbnail').append(html);
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
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
@stop
