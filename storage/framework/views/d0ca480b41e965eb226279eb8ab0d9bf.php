<section class="partner-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_partner')); ?></span>
            <h2><?php echo e(setting('title_partner')); ?></h2>
            <p><?php echo e(setting('description_partner')); ?></p>
        </div>

        <div class="row">
            <div class="partner-slides owl-carousel owl-theme">
                <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="partner-item">
                            <a href="#">
                                <img src="<?php echo e($partner->image_path); ?>" alt="<?php echo e($partner->name); ?>" style="height: 60px">
                            </a>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/partner.blade.php ENDPATH**/ ?>