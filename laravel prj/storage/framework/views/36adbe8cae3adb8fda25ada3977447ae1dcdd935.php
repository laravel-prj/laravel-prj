
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
            <h1>Manager Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manager Customers</li>
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
          <h3 class="card-title">Customers Manage</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          id
                      </th>
                      <th style="width: 5%;">
                          first name
                      </th>
                      <th style="width: 20%">
                          last name
                      </th>
                      
                      <th style="width: 5%">
                          address
                      </th>
                      <th style="width: 19%">
                        birthday
                      </th>
                      <th style="width:1%">
                        gender
                      </th>
                      <th style="width: 5%">
                        phone
                      </th>
                      <th style="width: 15%;">
                      email
                      </th>
                      <th style="width: 5%">
                        city
                      </th>
                      <th style="width:" >
                        password
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
                            <?php echo e($item->first_name); ?>

                        </td>
                        <td>
                            <?php echo e($item->last_name); ?>

                        </td>
                       
                        <td>
                            <?php echo e($item->address); ?>

                        </td>
                        <td>
                            <?php echo e($item->birthday); ?>

                        </td>
                        <td>
                            <?php echo e($item->gender); ?>

                        </td>
                        <td>
                            <?php echo e($item->tel); ?>

                        </td>
                        <td>
                            <?php echo e($item->email); ?>

                        </td>
                        <td>
                            <?php echo e($item->city); ?>

                        </td>
                        <td style="width: 300px">
                            <?php echo e($item->password); ?>

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






<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\linh\OneDrive\Máy tính\laravel prj\resources\views/admin/pages/customer-mng.blade.php ENDPATH**/ ?>