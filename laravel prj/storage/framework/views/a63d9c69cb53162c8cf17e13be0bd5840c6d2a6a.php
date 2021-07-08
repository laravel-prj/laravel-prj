
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
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
                <form enctype="multipart/form-data" method="post" action="/admin-mo/item/store">
                    <div class="form-group row">
                        <label for="brandSearch" class="col-2 col-form-label">Brand</label>
                        <div class="col-sm-3">
                            <select id="brandSearch" class="form-control" name="brand">
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="typeSearch" class="col-2 col-form-label">Type</label>
                        <div class="col-sm-3">
                            <select id="typeSearch" class="form-control" name="type">
                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-2 col-form-label">Name</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="product_name_fr" name="name" value="">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="description" class="col-2 col-form-label">Description</label>
                        <div class="col-sm-3">
                            <textarea name="description" id="description" cols="45" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-2 col-form-label">Price</label>
                        <div class="col-sm-3">
                            <input type="number" min="0" class="form-control" id="price" name="price" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feature" class="col-2 col-form-label">Feature</label>
                        <div class="col-sm-3">
                            <select id="feature" class="form-control" name="feature">
                                <option value="0">Normal</option>
                                <option value="1">Hot</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discount" class="col-2 col-form-label">Discout Item(%)</label>
                        <div class="col-sm-3">
                            <input type="number" min="0" max="100" class="form-control" id="discount" name="discout_item"
                                value="">
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="shop_id" value="<?php echo e($shop->id); ?>">
                <div class="col-md-12">
                    <input type="submit" value="Create" class="btn btn-success">
                </div>
            </div>
            <?php echo csrf_field(); ?>
            </form>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").click(function(e) {
                    if ($("#files").val() !== '') {
                        alert('Hành động này sẽ clear toàn bộ Images');
                        $('#fileImages .pip').remove();
                        $('#files').val("");
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
                                "<br/><span class=\"remove\">Remove image</span>" + "</span>";
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
                    $('#fileImages .pip').remove();
                    $('#files').val("");
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });

        var brandSearch;
        $("#brandSearch")
            .change(function() {
                brandSearch = $(this).val();
                $.ajax({
                    type: "GET",
                    url: window.location.origin + "/api/ajaxGetTypeByBrandId",
                    data: {
                        brandSearch: brandSearch,
                        flg: true
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/admin/pages/items/create.blade.php ENDPATH**/ ?>