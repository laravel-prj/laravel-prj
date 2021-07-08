
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo \Session::get('success'); ?>

            </div>
        <?php endif; ?>
        <?php if(\Session::has('error')): ?>
            <div class="alert alert-danger">
                <?php echo \Session::get('error'); ?>

            </div>
        <?php endif; ?>
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
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="typeSearch">Type</label>
                            <select id="typeSearch" class="form-control" name="typeSearch">
                                <option value="0">All</option>
                                
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="row"></div>
                            <label for="nameSearch">Name</label>
                            <input id="nameSearch" type="text" class="form-control" name="nameSearch"
                                onkeyup="return onSearchName();">
                        </div>
                        <div class="col-sm-3">
                            <a class="btn btn-primary float-right" href="<?php echo e(asset('admin-mo/item/create')); ?>">Create</a>
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
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->type->brand->name); ?></td>
                                        <td><?php echo e($item->type->name); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <?php if(isset($item->images[0]->img)): ?>
                                            <td><img src="<?php echo e(asset('customer/img') . '/' . $item->images[0]->img); ?>"
                                                    alt="" width="100px" height="100px">
                                            </td>
                                        <?php else: ?>
                                            <td><img src="<?php echo e(asset('admin/images') . '/no_image.png'); ?>" alt=""
                                                    width="100px" height="100px">
                                            </td>
                                        <?php endif; ?>
                                        <td><?php echo e($item->price); ?></td>
                                        <td>
                                            <?php if($item->feature == 1): ?>
                                                <b>hot</b>
                                            <?php else: ?>
                                                normal
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($item->discout_item); ?>%</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="javascript:void(0);"
                                                onclick="return onAddInfo(<?php echo e($item->id); ?>);">
                                                <i class="fas fa-pencil-alt"></i>Add Info
                                            </a>
                                            <a class="btn btn-info btn-sm" href="javascript:void(0);"
                                                onclick="return onEditItem(<?php echo e($item->id); ?>);">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                                onclick="return onDeleteItem(<?php echo e($item->id); ?>);">
                                                <i class="fas fa-trash"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    
    
    
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/admin/pages/items/index.blade.php ENDPATH**/ ?>