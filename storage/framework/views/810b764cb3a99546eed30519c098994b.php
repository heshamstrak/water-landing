<a href="<?php echo e(route('admin.contacts.reply', $id)); ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Reply</a>

<form action="<?php echo e(route('admin.contacts.destroy', $id)); ?>" class="my-1 my-xl-0" method="post" style="display: inline-block;">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> Delete</button>
</form>

<?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/contacts/data_table/actions.blade.php ENDPATH**/ ?>