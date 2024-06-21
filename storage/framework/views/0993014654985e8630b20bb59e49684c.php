<section id="about" class="about-area ptb-100 bg-image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="row about-image">
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image">
                            <img src="<?php echo e(Storage::url('public/uploads/settings/'.setting('about_image_one'))); ?>" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image">
                            <img src="<?php echo e(Storage::url('public/uploads/settings/'.setting('about_image_two'))); ?>" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image mt-30">
                            <img src="<?php echo e(Storage::url('public/uploads/settings/'.setting('about_image_three'))); ?>" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image mt-30">
                            <img src="<?php echo e(Storage::url('public/uploads/settings/'.setting('about_image_four'))); ?>" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span><?php echo e(setting('main_title_about')); ?></span>
                    <h2><?php echo e(setting('title_about')); ?></h2>
                    <?php echo setting('description_about'); ?>

                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/about.blade.php ENDPATH**/ ?>