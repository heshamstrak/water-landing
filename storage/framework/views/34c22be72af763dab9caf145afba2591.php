<?php $__env->startSection('content'); ?>

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title mb-0">Contact Us</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.home')); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact Us Reply to <?php echo e($contact->name); ?>

            </li>
          </ol>
        </div>
      </div>
    </div>
</div>

  <div class="content-body"><!-- Basic Tables start -->
    <div class="row">
        
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5><span style="display: inline-block; width: 65px">Name</span> : <b><?php echo e($contact->name); ?></b></h5>
                    <h5><span style="display: inline-block; width: 65px">Email</span> : <b><?php echo e($contact->email); ?></b></h5>
                    <h5><span style="display: inline-block; width: 65px">Phone</span> : <b><?php echo e($contact->phone); ?></b></h5>
                    <hr>
                    <div style="background-color: #f6f7fa; padding:10px">
                        <p>
                            <?php echo e($contact->message); ?>

                        </p>
                    </div>
                    <hr>
                    <?php $__currentLoopData = $contact->msg_reply(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h5>Reply : </h5>
                    <div style="background-color: #f6f7fa; padding:10px">
                        <p>
                            <?php echo e($row->message); ?>

                        </p>
                    </div> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
           
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
    
</div>

<div class="col-12 px-0">
    <div class="card shadow-none border rounded">
      <div class="card-body quill-wrapper">
        <span>Reply to <?php echo e($contact->name); ?></span><br><br>
        <form action="<?php echo e(route('admin.contacts.reply.store', $contact->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="snow-container" id="detail-view-quill">
              <div class="detail-view-editor ql-container ql-snow">
                  <textarea name="reply" id="" cols="30" rows="10" class="form-control" placeholder="Type Your Reply Message ......"></textarea>
              </div>
              <br>
              <div class="d-flex justify-content-start">
              <button class="btn btn-primary send-btn" type="submit">
                <i class="icofont-send"></i>
                <span class="d-none d-md-inline"> Send</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/contacts/reply.blade.php ENDPATH**/ ?>