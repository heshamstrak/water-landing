<?php $name = 'skills' ?>
<?php if(auth()->user()->hasPermission('update_'.$name)): ?>
    <a href="<?php echo e(route('admin.'.$name.'.edit', $id)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
<?php endif; ?>

<?php if(auth()->user()->hasPermission('delete_'.$name)): ?>
    <form action="<?php echo e(route('admin.'.$name.'.destroy', $id)); ?>" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>
    </form>
<?php endif; ?>
<?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/skills/data_table/actions.blade.php ENDPATH**/ ?>