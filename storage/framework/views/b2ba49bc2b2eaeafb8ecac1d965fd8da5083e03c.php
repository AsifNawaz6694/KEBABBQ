<!DOCTYPE html>
<html lang="en">
<head>
	<title>KEBABBQ</title>
	<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<!-- ====== Preloader ======  -->
	<div class="loading">
		<div class="load-circle">
		</div>
	</div>
	<!-- ======End Preloader ======  -->
	<!-- =========    HEADER START    ======== -->
	<section class="s-header" id="home" data-scroll-index="0">
		<?php echo $__env->make('frontend.partials.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</section>
	<?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>