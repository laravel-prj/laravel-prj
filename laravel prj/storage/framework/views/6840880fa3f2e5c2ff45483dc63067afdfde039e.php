
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    
    <link rel="stylesheet" href="<?php echo e(asset('boostrap-3.3.7/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/prj.css')); ?>">
    <?php echo $__env->yieldContent('style-libraries'); ?>
    
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <div class="container-storage">
        
        <?php echo $__env->make('partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    
    <script src="<?php echo e(asset('jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('boostrap-3.3.7/js/bootstrap.min.js')); ?>"></script>
    
    <?php echo $__env->yieldContent('scripts'); ?>
    <script>
        function bigImg(x){
            x.style.height ="200px";
            x.style.width = "200px";
        }

        function normalImg(x){
            x.style.height = "180px";
            x.style.width = "180px";
        }
    </script>
</body>
</html>
<?php /**PATH C:\Users\user\Downloads\example-app\resources\views/layouts/master.blade.php ENDPATH**/ ?>