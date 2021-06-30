<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
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
          <h3 class="card-title">Product items</h3>

          <div class="card-tools">
              <a class="btn btn-primary btn-sm" href="<?php echo e(asset('admin-mo/create-item')); ?>">Create</a>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          id
                      </th>
                      <th style="width: 5%;">
                          shop
                      </th>
                      <th style="width: 20%">
                          products name
                      </th>
                      <th style="width: 10%," >
                          type
                      </th>
                      <th style="width: 5%">
                          quantity
                      </th>
                      <th style="width: 5%">
                        price
                      </th>
                      <th style="width:10%">
                        feature
                      </th>
                      <th style="width: 5%">
                        discout
                      </th>
                      <th style="width: 35;">
                      image
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($item->id); ?>

                        </td>
                        <td>
                            <?php echo e($item->shops->name); ?>

                        </td>
                        <td>
                            <?php echo e($item->name); ?>

                        </td>
                        <td>
                            <?php echo e($item->type->name); ?>

                        </td>
                        <td>
                            <?php echo e($item->quantity); ?>

                        </td>
                        <td>
                            <?php echo e($item->price); ?>

                        </td>
                        <td>
                            <?php echo e($item->feature); ?>

                        </td>
                        <td>
                            <?php echo e($item->discout_item); ?>

                        </td>
                        <td>
                            <?php if($item->img): ?>
                                <img src="<?php echo e(asset("admin/images/$item->img")); ?>" style="width:50px; heigth:50px">
                            <?php else: ?>
                                <img src="<?php echo e(asset("admin/images/no_image.png")); ?>" style="width:50px; heigth:50px">
                            <?php endif; ?>
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
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
   $(function () {

   });
</script>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\laravel prj\resources\views/admin/pages/projects.blade.php ENDPATH**/ ?>