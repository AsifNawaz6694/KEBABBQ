<?php $__env->startSection('content'); ?>

<!-- <div class="container"> -->
	<div class="row">
		<div class="col-md-12">
			<div id="chartContainer" style="height: 300px; width: 100%;"></div>
		</div>
	</div><br>
	<div class="row">
		<div class="col-md-12">
			<div id="chartContainer_order" style="height: 300px; width: 100%;"></div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.masterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>