
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
                        <h1 class="m-0">BRANDS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manager Brands</li>
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
                <form method="POST" action="/admin-mo/brand/store">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-auto col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="product_name_fr" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="submit" value="Create" class="btn btn-success">
                        </div>
                    </div>
                    <?php echo csrf_field(); ?>
                </form>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
    </script>
<?php $__env->stopSection(); ?>



<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/admin/pages/brands/create.blade.php ENDPATH**/ ?>