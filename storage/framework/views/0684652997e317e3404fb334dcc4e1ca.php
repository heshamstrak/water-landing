<?php $name = 'profolios' ?>

<?php $__env->startSection('content'); ?>


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize"><?php echo e($name); ?> | Edit <?php echo e($profolio->name); ?></h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="<?php echo e(route('admin.'.$name.'.update', $profolio->id)); ?>">
            <div class="card-body">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <?php echo $__env->make('admin.partials._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                
                <?php $nameInput = 'name' ?>
                <div class="form-group">
                    <label class="text-capitalize"><?php echo e($nameInput); ?> <span class="text-danger">*</span></label>
                    <input type="text" name="<?php echo e($nameInput); ?>" autofocus class="form-control" value="<?php echo e(old($nameInput, $profolio->{$nameInput})); ?>" required>
                </div>

                
                <?php $nameInput = 'description' ?>
                <div class="form-group">
                    <label class="text-capitalize"><?php echo e($nameInput); ?> <span class="text-danger">*</span></label>
                    <textarea name="<?php echo e($nameInput); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($nameInput, $profolio->{$nameInput})); ?></textarea>
                </div>

                
                <?php $nameInput = 'category_id' ?>
                <div class="form-group">
                    <label class="text-capitalize">Category</label>
                    <select name="<?php echo e($nameInput); ?>" class="form-control">
                        <option value="">Select Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == old($nameInput, $profolio->{$nameInput}) ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div> 

                
                <?php $nameInput = 'image' ?>
                <div class="form-group">
                    <label class="text-capitalize"><?php echo e($nameInput); ?></label>
                    <input type="file" name="poster" id="input-file-now" class="dropify" <?php if(isset($profolio)): ?> data-default-file="<?php echo e($profolio->image_path); ?>" data-show-remove="false" <?php endif; ?> data-height="585"/>
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





<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/profolios/edit.blade.php ENDPATH**/ ?>