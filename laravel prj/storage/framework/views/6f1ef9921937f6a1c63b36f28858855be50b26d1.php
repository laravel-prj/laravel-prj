
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    
    <link href="<?php echo e(asset("customer/css/font-awesome.css")); ?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo e(asset("customer/css/bootstrap.css")); ?>" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="<?php echo e(asset("customer/css/jquery.smartmenus.bootstrap.css")); ?>" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("customer/css/jquery.simpleLens.css")); ?>>
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("customer/css/slick.css")); ?>>
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("customer/css/nouislider.css")); ?>>

    <link id="switcher"rel="stylesheet" href=<?php echo e(asset("customer/css/theme-color/default-theme.css")); ?> >
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href=<?php echo e(asset("customer/css/sequence-theme.modern-slide-in.css")); ?> rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href=<?php echo e(asset("customer/css/style.css")); ?> rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <?php echo $__env->yieldContent('style-libraries'); ?>
    
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <div class="container-storage">

        <?php echo $__env->make('customer.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('customer.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo e(asset("customer/js/bootstrap.js")); ?>"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="<?php echo e(asset("customer/js/jquery.smartmenus.js")); ?>"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="<?php echo e(asset("customer/js/jquery.smartmenus.bootstrap.js")); ?>"></script>
    <!-- To Slider JS -->
    <script src="<?php echo e(asset("customer/js/sequence.js")); ?>"></script>
    <script src="<?php echo e(asset("customer/js/sequence-theme.modern-slide-in.js")); ?>"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="<?php echo e(asset("customer/js/jquery.simpleGallery.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset("customer/js/jquery.simpleLens.js")); ?>"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="<?php echo e(asset("customer/js/slick.js")); ?>"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="<?php echo e(asset("customer/js/nouislider.js")); ?>"></script>
    <!-- Custom js -->
    <script src="<?php echo e(asset("customer/js/custom.js")); ?>"></script>

    
    <script src="<?php echo e(asset("customer/js/products.js")); ?>"></script>
    <!-- Cart js -->
    <script src="<?php echo e(asset("customer/js/cart.js")); ?>"></script>
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

        $("[type='number']").keypress(function (evt) {
            evt.preventDefault();
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\clown\OneDrive\Máy tính\laravel-prj\laravel prj\resources\views/customer/layouts/master.blade.php ENDPATH**/ ?>