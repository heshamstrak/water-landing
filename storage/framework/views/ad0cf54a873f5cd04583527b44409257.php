<section class="features-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_feature')); ?></span>
            <h2><?php echo e(setting('title_feature')); ?></h2>
            <p><?php echo e(setting('description_feature')); ?></p>
        </div>

        <div class="row">
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="<?php echo e($feature->icon); ?>"></i>
                        </div>
                        <h3><?php echo e($feature->title); ?></h3>
                        <p><?php echo e(Str::words($feature->description, 15, ' ....')); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/features.blade.php ENDPATH**/ ?>