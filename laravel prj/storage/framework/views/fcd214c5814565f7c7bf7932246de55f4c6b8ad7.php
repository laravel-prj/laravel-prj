
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
            <!-- Default box -->
            <div class="card">
                <div class="card-tools">
                </div>
                <div class="card-header">
                    <div class="row justify-content-end">
                        <div class="col-sm-auto">
                            <a class="btn btn-warning" href="<?php echo e(asset("admin-mo/images/createMul/item/$itemId")); ?>"><i
                                    class="fa fa-plus-square" aria-hidden="true"></i> <i class="fa fa-plus-square"
                                    aria-hidden="true"></i> Multi Images</a>
                        </div>
                        <div class="col-sm-auto">
                            <a class="btn btn-primary" href="<?php echo e(asset("admin-mo/images/createMul/item/$itemId")); ?>"><i
                                    class="fa fa-plus" aria-hidden="true"></i> Create</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTable">
                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if($image->default_img == 1): ?>
                                            <td>Default</td>
                                        <?php else: ?>
                                            <td>Normal</td>
                                        <?php endif; ?>
                                        <td><img src="<?php echo e(asset('customer/img') . '/' . $image->img); ?>" alt="" width="200"
                                                height="300px">
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="javascript:void(0);"
                                                onclick="return onEditImage(<?php echo e($itemId); ?>, <?php echo e($image->id); ?>);">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                                onclick="return onDeleteImage(<?php echo e($image->id); ?>);">
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
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        function onEditImage(itemId, imageId) {
            location.href = '/admin-mo/images/update/item/' + itemId + '/' + imageId;
        }

        function onDeleteImage(imageId) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/images/delete/' + imageId;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/admin/pages/images/index.blade.php ENDPATH**/ ?>