
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
                        <h1>Manager Info <?php echo e($item->name); ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager Info <?php echo e($item->name); ?></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <div class="row">
                <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-auto">
                        <img src="<?php echo e(asset('customer/img') . '/' . $img->img); ?>" alt="" width="200px" height="300px">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a class="btn btn-primary float-right"
                        href="<?php echo e(asset('admin-mo/itemDetail/create/' . $item->id)); ?>">Create</a>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-tools">
                </div>
                <div class="card-header">
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTable">
                                <?php $__currentLoopData = $itemDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($itemDetail->size); ?></td>
                                        <td><?php echo e($itemDetail->quantity); ?></td>
                                        <td style="width: 220px">
                                            <a class="btn btn-info btn-sm"
                                                href="<?php echo e(asset("admin-mo/itemDetail/update/$item->id/$itemDetail->id")); ?>">
                                                <i class="fas fa-pencil-alt"></i>Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0);"
                                                onclick="return onDeteleDetail(<?php echo e($itemDetail->id); ?>);">
                                                <i class="fas fa-trash"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
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
        function onDeteleDetail(detailId) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/itemDetail/delete/' + detailId;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/admin/pages/itemDetails/index.blade.php ENDPATH**/ ?>