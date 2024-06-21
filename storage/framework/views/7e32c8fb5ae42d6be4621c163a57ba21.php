<section id="services" class="services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_service')); ?></span>
            <h2><?php echo e(setting('title_service')); ?></h2>
            <p><?php echo e(setting('description_service')); ?></p>
        </div>

        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="services-image">
                        <img src="<?php echo e($service->image_path); ?>" alt="image" style="width: 100%; height: 304px; object-fit: cover;">
                        <div class="icon">
                            <i class="<?php echo e($service->icon); ?>"></i>
                        </div>
                    </div>

                    <div class="services-content">
                        <h3><?php echo e($service->title); ?></h3>
                        <p><?php echo e(Str::words($service->description, 15, ' ...')); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/service.blade.php ENDPATH**/ ?>