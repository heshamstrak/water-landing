<section class="skill-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="skill-content ptb-100">
                    <div class="section-title">
                        <span><?php echo e(setting('main_title_skill')); ?></span>
                        <h2><?php echo e(setting('title_skill')); ?></h2>
                        <p><?php echo e(setting('description_skill')); ?></p>
                    
                    </div>

                    <div class="skills">
                        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="skill-item">
                            <div class="skill-header">
                                <h3 class="skill-title"><?php echo e($skill->name); ?></h3>

                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="<?php echo e($skill->power); ?>">0</span>%</div>
                                </div>
                            </div>

                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="<?php echo e($skill->power); ?>"></div></div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="skill-image">
                    <img src="<?php echo e(asset('frontend/assets')); ?>/img/skill-bg.jpg" alt="skill-image">
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/skill.blade.php ENDPATH**/ ?>