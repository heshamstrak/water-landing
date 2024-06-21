
<!doctype html>
<html lang="zxx">
    
    <?php echo $__env->make('layouts.frontend._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <body data-bs-spy="scroll" data-bs-offset="70">
        <!-- Start Preloader Area -->
		

        <!-- Start Navbar Area -->
        <?php echo $__env->make('layouts.frontend._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        <!-- End Navbar Area -->

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.frontend._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/layouts/frontend/app.blade.php ENDPATH**/ ?>