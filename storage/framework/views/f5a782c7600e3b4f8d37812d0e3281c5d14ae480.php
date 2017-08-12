<?php if(Session::has('messages')): ?>
	
	<div class="alert alert-success"><?php echo e(Session::get('messages')); ?></div>

<?php endif; ?>