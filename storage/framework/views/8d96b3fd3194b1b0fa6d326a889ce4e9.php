<?php $__env->startSection('content'); ?>

                
        <!-- Start Page Title Area -->
        <section class="page-title-area item-bg7">
            <div class="container">
                <h2>Blog Details</h2>
            </div>
        </section>
        <!-- End Page Title Area -->

        <!-- Start Blog Details Area -->
		<section class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details">
                            <div class="post-image">
                                <img src="<?php echo e($blog->poster_path); ?>" alt="<?php echo e($blog->title); ?>">
                            </div>

                            <h3><?php echo e($blog->title); ?></h3>

                            <div class="blog-meta">
                                <ul>
                                    <li><i class="icofont-ui-user"></i> <a href="#">Admin</a></li>
                                    <li><i class="icofont-clock-time"></i><?php echo e(date('M d, y',strtotime($blog->created_at))); ?></li>
                                </ul>
							</div>
                            <?php echo $blog->description; ?>

						</div>
						
						<div class="post-tag-media">
							<div class="row h-100 align-items-center">

								<div class="col-lg-6 col-md-5">
									<ul class="social-share">
										<li><span>Share on:</span></li>
										<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('single-blog', $blog->id)); ?>" target="_blank"><i class="icofont-facebook"></i></a></li>
										<li><a href="https://twitter.com/intent/tweet?url=<?php echo e(route('single-blog', $blog->id)); ?>" target="_blank"><i class="icofont-twitter"></i></a></li>
										<li><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(route('single-blog', $blog->id)); ?>" target="_blank"><i class="icofont-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

				
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar">
                  
                            <div class="widget widget_recent_entries">
								<h3 class="widget-title">
									Recent Posts
								</h3>

								<ul>
                                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
										<a href="<?php echo e(route('single-blog', $row->id)); ?>">
											<img src="<?php echo e($row->poster_path); ?>" alt="<?php echo e($row->title); ?>" style="max-height: 55px; width: 85px;">
										</a>

										<h5><a href="#"><?php echo e($row->title); ?></a></h5>
										<p class="date"><?php echo e(date('M d, y',strtotime($row->created_at))); ?></p>
									</li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
								</ul>
                            </div>
                            
                     
                    
                        </div>
                    </div>
                </div>
			</div>
		</section>
		<!-- End Blog Details Area -->



<!-- Start Contact Area -->
    <?php echo $__env->make('frontend.home.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- End Contact Area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/blogs/single-blog.blade.php ENDPATH**/ ?>