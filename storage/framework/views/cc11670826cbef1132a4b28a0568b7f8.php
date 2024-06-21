<?php $__env->startSection('content'); ?>








<!-- Start Main Banner -->
<div id="home" class="main-banner item-bg7 jarallax" data-jarallax='{"speed": 0.2}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="main-banner-content text-center">
                    <span><?php echo e(setting('main_title_home')); ?></span>
                    <h1><?php echo e(setting('title_home')); ?></h1>
                    <p><?php echo e(setting('description_home')); ?></p>

                    <div class="btn-box">
                        <a href="#about" class="btn btn-primary">Get Started</a>

                        <span>or</span>

                        <a href="<?php echo e(setting('video_home')); ?>" class="video-btn popup-youtube"><i class="icofont-ui-play"></i> Watch Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="<?php echo e(asset('frontend/assets')); ?>/img/shapes/1.png" alt="shape1"></div>
    <div class="shape2 rotateme"><img src="<?php echo e(asset('frontend/assets')); ?>/img/shapes/2.png" alt="shape2"></div>
    <div class="shape3 rotateme"><img src="<?php echo e(asset('frontend/assets')); ?>/img/shapes/3.png" alt="shape3"></div>
    <div class="shape4"><img src="<?php echo e(asset('frontend/assets')); ?>/img/shapes/4.png" alt="shape4"></div>
</div>
<!-- End Main Banner -->

<!-- Start Features Area -->
    <?php echo $__env->make('frontend.home.features', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Features Area -->

<!-- Start About Area -->
    <?php echo $__env->make('frontend.home.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End About Area -->

<!-- Start CTA Area -->
    <?php echo $__env->make('frontend.home.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End CTA Area -->

<!-- Start Services Area -->
    <?php echo $__env->make('frontend.home.service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Services Area -->

<!-- Start Who We Are Area -->
    <?php echo $__env->make('frontend.home.who-we-are', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Who We Are Area -->

<!-- Start Skill Area -->
    <?php echo $__env->make('frontend.home.skill', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Skill Area -->

<!-- Start What We Different Area -->
    <?php echo $__env->make('frontend.home.different', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End What We Different Area -->

<!-- Start Portfolio Area -->
    <?php echo $__env->make('frontend.home.portfolio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Portfolio Area -->

<!-- Start Fun Facts Area -->
    <?php echo $__env->make('frontend.home.funfacts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Fun Facts Area -->

<!-- Start Team Area -->
    
<!-- End Team Area -->

<!-- Start Our Story Area -->
    
<!-- End Our Story Area -->

<!-- Start Pricing Area -->
    
<!-- End Pricing Area -->

<!-- Start Testimonial Area -->
    <?php echo $__env->make('frontend.home.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Testimonial Area -->

<!-- Start Call To Action -->
    <?php echo $__env->make('frontend.home.call-to-action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Call To Action -->

<!-- Start FAQ Area -->
    
<!-- End FAQ Area -->

<!-- Start Blog Area -->
    <?php echo $__env->make('frontend.home.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Blog Area -->

<!-- Start CTA Area -->
    <?php echo $__env->make('frontend.home.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End CTA Area -->

<!-- Start Partner Area -->
    <?php echo $__env->make('frontend.home.partner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Partner Area -->

<!-- Start Subscribe Area-->
    <?php echo $__env->make('frontend.home.subscribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Subscribe Area-->

<!-- Start Contact Area -->
    <?php echo $__env->make('frontend.home.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Contact Area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home.blade.php ENDPATH**/ ?>