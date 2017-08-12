<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-danger fade in">
   <button data-dismiss="alert" class="close"></button>
   <i class="fa-fw fa fa-times"></i>
   <strong>Error!</strong>
   <span ng-bind-html="Message"><?php echo e($error); ?></span>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>