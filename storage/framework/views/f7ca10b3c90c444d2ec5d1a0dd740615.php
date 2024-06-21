<section id="testimonial" class="testimonial-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_testimonial')); ?></span>
            <h2><?php echo e(setting('title_testimonial')); ?></h2>
            <p><?php echo e(setting('description_testimonial')); ?></p>
        
        </div>
        
        <div class="row">
            <div class="testimonial-slides owl-carousel owl-theme">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="testimonial-item">
                            <div class="client-image">
                                <img src="<?php echo e($testimonial->image_path); ?>" alt="image" style="height: 100%; object-fit: cover;">
                            </div>

                            <div class="testimonial-content">
                                <div class="desc">
                                    <p><?php echo e($testimonial->description); ?></p>
                                </div>

                                <div class="client-info">
                                    <h3><?php echo e($testimonial->name); ?></h3>
                                    <span><?php echo e($testimonial->job); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/testimonial.blade.php ENDPATH**/ ?>