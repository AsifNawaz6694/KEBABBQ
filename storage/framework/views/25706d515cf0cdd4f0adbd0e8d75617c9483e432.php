<?php $__env->startSection('content'); ?>
<style type="text/css">
   section.thankyou {
    min-height: 380px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}
</style>
<section class="thankyou">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1>Thank You For Purchasing With Us</h1>
         </div>
      </div>
   </div>
</section>
<!-- =========    CONTACT END    ======== -->
<!-- =========    GOOGLE MAP START    ======== -->
<div id="map"></div>
<!-- =========    GOOGLE MAP END    ======== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>