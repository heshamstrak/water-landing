<section id="portfolio" class="portfolio-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_portfolio')); ?></span>
            <h2><?php echo e(setting('title_portfolio')); ?></h2>
            <p><?php echo e(setting('description_portfolio')); ?></p>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="shorting-menu">
                    <button class="filter" data-filter="all">All</button>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button class="filter" data-filter=".<?php echo e($category->name); ?>"><?php echo e($category->name); ?></button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="shorting">
            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $category->profolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 mix <?php echo e($category->name); ?>">
                            <div class="single-work">
                                <a href="<?php echo e($row->image_path); ?>" class="popup-btn"></a>

                                <div class="work-image">
                                    <img src="<?php echo e($row->image_path); ?>" alt="work-image" style="width: 100%; height: 410px; object-fit: cover;">
                                    <div class="work-overlay">
                                        <h3><?php echo e($row->name); ?></h3>
                                        <span><?php echo e($row->description); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/portfolio.blade.php ENDPATH**/ ?>