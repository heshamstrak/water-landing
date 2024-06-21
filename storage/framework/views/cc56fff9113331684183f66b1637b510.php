<section id="blog" class="blog-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_blog')); ?></span>
            <h2><?php echo e(setting('title_blog')); ?></h2>
            <p><?php echo e(setting('description_blog')); ?></p> 
        </div>

        <div class="row">
            <div class="blog-slides owl-carousel owl-theme">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="<?php echo e(route('single-blog', $blog->id)); ?>"><img src="<?php echo e($blog->poster_path); ?>" alt="image" style="height: 309px; width: 100%; object-fit:cover"></a>
                        </div>

                        <div class="blog-post-content">
                            <span class="date"><?php echo e(date('M d, y',strtotime($blog->created_at))); ?></span>
                            <h3><a href="<?php echo e(route('single-blog', $blog->id)); ?>"><?php echo e($blog->title); ?></a></h3>
                            <p><?php echo e(Str::words($blog->description, 15, ' ...')); ?></p>
                            <a href="<?php echo e(route('single-blog', $blog->id)); ?>" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/blog.blade.php ENDPATH**/ ?>