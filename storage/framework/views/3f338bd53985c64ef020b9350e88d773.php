<?php $name = 'skills' ?>

<?php $__env->startSection('content'); ?>


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize"><?php echo e($name); ?> | Edit <?php echo e($skill->name); ?></h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="<?php echo e(route('admin.'.$name.'.update', $skill->id)); ?>">
            <div class="card-body">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <?php echo $__env->make('admin.partials._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                
                <?php $name = 'name' ?>
                <div class="form-group">
                    <label><?php echo e($name); ?> <span class="text-danger">*</span></label>
                    <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name, $skill->name)); ?>" required>
                </div>

                
                <?php $name = 'power' ?>
                <div class="form-group">
                    <label class="text-capitalize"><?php echo e($name); ?> <span class="text-danger">*</span></label>
                    <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name, $skill->power)); ?>" required>
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





<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/skills/edit.blade.php ENDPATH**/ ?>