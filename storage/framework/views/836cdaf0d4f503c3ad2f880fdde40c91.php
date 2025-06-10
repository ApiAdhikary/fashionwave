<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home | Fashionwave - Ecommerce Website</title>
    <meta name="description" content="Fashionwave - Ecommerce Website" />
    <meta name="keywords"
        content="business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive" />
    <meta name="author" content="liveprojectacademy" />
    <meta name="csrf-token" content="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">

    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- css file  -->
    <link rel="stylesheet" href="<?php echo e(asset('front/assets/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('front/assets/css/plugins.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('front/assets/css/owl.carousel.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('front/assets/css/owl.theme.default.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('front/assets/css/style.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('front/assets/css/extra.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('front/assets/css/responsive.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('front/assets/css/cookie-consent.css')); ?>">


    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('front/assets/images/favicon.png')); ?>" type="image/x-icon" >

    <link rel="stylesheet" href= "<?php echo e(asset('admin/assets/css/toastr.min.css')); ?>" >

</head>

<body class="direction-ltr">
<?php echo $__env->make('front.layouts.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="maincontent">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
   
    <?php echo $__env->make('front.layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": "5000",
            "positionClass": "toast-top-right"
        };
    
        // Validation errors
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                toastr.error("<?php echo e($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    
        // Flash error from session
        <?php if(session('error')): ?>
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>
    
        // Flash success
        <?php if(session('success')): ?>
            toastr.success("<?php echo e(session('success')); ?>");
        <?php endif; ?>
    
        // Info
        <?php if(session('info')): ?>
            toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>
    
        // Warning
        <?php if(session('warning')): ?>
            toastr.warning("<?php echo e(session('warning')); ?>");
        <?php endif; ?>
    </script>
    

</body>

</html><?php /**PATH C:\xampp\htdocs\fashionwave\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>