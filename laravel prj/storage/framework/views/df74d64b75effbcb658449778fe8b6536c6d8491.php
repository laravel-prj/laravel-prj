
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    
    <style>
        .edit {
            margin-top: 30px;
            margin-left: 50px;
            
        }
        .brand{
            width: 50%;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="content-wrapper">
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
                <form method="POST" action="/admin-mo/postUpdateBrand/<?php echo e($brand->id); ?>" >
             
                        <div class="form-group" >
                            <label class="col-md-12 control-label">Brands</label>
                            <div class="col-md-12">
                                Name: <input id="product_name_fr" name="name" value="" type="text" class="brand" >

                            </div>
                        </div>
                                <input type="submit" value="Edit" class="edit">
                            </div>
                            
                        </div>
                    <?php echo csrf_field(); ?>
                </form>
            </div>
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\linh\OneDrive\Máy tính\laravel prj\resources\views/admin/pages/updateBrand.blade.php ENDPATH**/ ?>