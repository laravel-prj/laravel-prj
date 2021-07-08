
<?php $__env->startSection('title', 'App - Top Page'); ?>
<?php $__env->startSection('style-libraries'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('styles'); ?>

<style>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">
             <div class="row">
               <div class="col-md-6">
                 <div class="aa-myaccount-login">
                 <h4>Login</h4>
                  <form method="post" class="aa-login-form">
                   <label for="">Username or Email address<span>*</span></label>
                    <input name="email" type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                     <input name="password" type="password" placeholder="Password">
                     <button type="submit" class="aa-browse-btn">Login</button>
                     <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                     <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                     <?php echo e(csrf_field()); ?>

                   </form>
                 </div>
               </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



<script>
   $(function () {
       // your custom javascript
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp8\htdocs\laravel-prj\laravel prj\resources\views/customer/pages/login.blade.php ENDPATH**/ ?>