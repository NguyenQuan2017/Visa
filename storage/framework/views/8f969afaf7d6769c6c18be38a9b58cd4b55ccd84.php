<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
      <div class="col-xs-12">
         <div class="page-title-box">
            <h4 class="page-title">Service</h4>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
   <?php echo $__env->make('admin/notification/errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <div class="row">
      <div class="col-sm-12">
         <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title"><b>Cập nhật</b></h4>
            <form class="form-horizontal"  method="post" action="<?php echo e(route('post-service-edit')); ?>">
               <?php echo e(csrf_field()); ?>

               <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
           
               <div class="modal-body">
                  
                  <div class="form-group">
                     <label class="col-md-2 control-label">Service</label>
                     <div class="col-md-10">
                        <select name="service" id="" class="form-control selectpicker"  multiple>
                        <option value="facebook">Facebook</option>
                        <option value="google">Google</option>
                        <option value="amazon">Amazon</option>
                        <option value="microsoft">Microsoft</option>
                     </select>
                     </div>
                  </div>
                   <div class="form-group">
                     <label class="col-md-2 control-label">Status</label>
                     <div class="col-md-10">
                        <select name="status" id="" class="form-control selectpicker " >
                        <option value="Die">Die</option>
                        <option value="Active">Active</option>
                       
                     </select>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <!-- <input type="submit" value="Change Update"> -->
                  <button type="submit" class="btn btn-primary"  >Change Update</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- end row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>