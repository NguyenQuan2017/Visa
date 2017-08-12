<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
      <div class="col-xs-12">
         <div class="page-title-box">
            <h4 class="page-title">Visa Cart</h4>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   <?php echo $__env->make('admin/notification/errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <div class="row">
      <div class="col-sm-12">
         <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Cập nhật</b></h4>
            <form class="form-horizontal"  method="post" action="<?php echo e(route('post-edit')); ?>">
               <?php echo e(csrf_field()); ?>

               <input type="hidden" name="id_visa_card" value="<?php echo e($visa_card->id); ?>">
           
               <div class="modal-body">
                  <div class="form-group">
                     <label class="col-md-2 control-label">Name</label>
                     <div class="col-md-10">
                        <input type="text" name="name" class="form-control" value="<?php echo e($visa_card['name']); ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-2 control-label">Id Card</label>
                     <div class="col-md-10">
                        <input type="text" name="id_card" class="form-control" value="<?php echo e($visa_card['id_card']); ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-2 control-label">Valid Date</label>
                     <div class="col-md-10">
                        <input type='text' name="valid_date" class="form-control" value="<?php echo e($visa_card['valid_date']); ?>" />
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-2 control-label">Code</label>
                     <div class="col-md-10">
                        <input type="text" name="code" class="form-control" value="<?php echo e($visa_card['code']); ?>">
                     </div>
                  </div>
            
               </div>
               <div class="modal-footer">
                  <!-- <input type="submit" value="Change Update"> -->
                  <button type="submit" class="btn btn-primary"  >Change Update</button>
                  <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-default">Close</a>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- end row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>