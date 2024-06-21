<?php $name = 'blogs' ?>

<?php $__env->startSection('content'); ?>


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize"><?php echo e($name); ?> | Edit <?php echo e($blog->name); ?></h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="<?php echo e(route('admin.'.$name.'.update', $blog->id)); ?>" enctype="multipart/form-data">
            <div class="card-body">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <?php echo $__env->make('admin.partials._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                
                <div class="form-group">
                    <label>Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" autofocus class="form-control" value="<?php echo e(old('title', $blog->title)); ?>" required>
                </div>

                
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" cols="30" rows="10"><?php echo e(old('description', $blog->description)); ?></textarea>
                </div>


                
                <div class="form-group">
                    <label class="text-capitalize">Poster</label>
                    <input type="file" name="poster" id="input-file-now" class="dropify" <?php if(isset($blog)): ?> data-default-file="<?php echo e($blog->poster_path); ?>" data-show-remove="false" <?php endif; ?> data-height="585"/>
                </div>
            
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/blogs/edit.blade.php ENDPATH**/ ?>