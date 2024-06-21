<section class="why-we-different ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_different')); ?></span>
            <h2><?php echo e(setting('title_different')); ?></h2>
            <p><?php echo e(setting('description_different')); ?></p> 
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="tab">
                    <ul class="tabs">
                        <?php $__currentLoopData = $differents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $different): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><?php echo e($different->title); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <div class="tab_content">
                        <?php $__currentLoopData = $differents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $different): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 why-we-different-content">
                                    <div class="tabs_item_content">
                                        <h3><?php echo e($different->title); ?></h3>
                           
                                        <?php echo $different->description; ?>


                                        <a href="#portfolio" class="btn btn-primary">Our Work</a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 why-we-different-img">
                                    <div class="tabs_item_img">
                                        <img src="<?php echo e($different->image_path); ?>" alt="img" style="height: 477px; width: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/different.blade.php ENDPATH**/ ?>