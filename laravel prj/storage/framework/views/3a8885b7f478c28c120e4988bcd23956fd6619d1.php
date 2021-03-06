
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>
    
    <style>
        .btn-create {
            padding: 4px 8px;
            margin-right: 16px;
            border-radius: 50%
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
                        <h1>Manager ItemTypes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager ItemTypes</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Item Type</h3>
                    <div class="card-tools">
                        <a class="btn btn-primary btn-sm btn-create"
                            href="<?php echo e(asset('admin-mo/itemType/create')); ?>">Create</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 25%">
                                    id
                                </th>
                                <th style="width: 25%;">
                                    brand
                                </th>
                                <th style="width: 25%;">
                                    type
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->brand->name); ?></td>
                                    <td><?php echo e($item->name); ?></td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm"
                                            href="<?php echo e(asset("admin-mo/itemType/update/$item->id")); ?>">
                                            <i class="fas fa-pencil-alt"></i>Edit
                                        </a>
                                        
                                        <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                            onclick="return onDeleteType(<?php echo e($item->id); ?>);">
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

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    
    
    
    <script>
        function onDeleteType(id) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/itemType/delete/' + id;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/admin/pages/itemType/index.blade.php ENDPATH**/ ?>