<?php $name = 'partners' ?>

<?php $__env->startSection('content'); ?>


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize"><?php echo e($name); ?> | Create</h3>
    </div>
    <div class="card-body">
        <form class="form" action="<?php echo e(route('admin.'.$name.'.store')); ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
  
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <?php echo $__env->make('admin.partials._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="<?php echo e(old('name')); ?>" required>
                </div>

                
                <?php $nameInput = 'image' ?>
                <div class="form-group">
                    <label class="text-capitalize"><?php echo e($nameInput); ?></label>
                    <input type="file" name="<?php echo e($nameInput); ?>" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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





<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/partners/create.blade.php ENDPATH**/ ?>