<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
   <div class="box box-primary">
      <div class="box-body box-profile">
          
         <div class="image-box">
            <?php if(!empty($product->image) && isset($product->image)): ?>
            <img src="<?php echo e(asset('public/storage/products-images/'.$product->image)); ?>" style="height:160px; width:160px" class="profile-user-img img-responsive img-circle">
            <?php else: ?>
            <img src="<?php echo e(asset('public/storage/products-images/default1.png')); ?>" style="height:160px; width:160px" class="profile-user-img img-responsive img-circle">
            <?php endif; ?>
            <form action="<?php echo e(route('ImageUploadProduct')); ?>" method="post" enctype="multipart/form-data" id="change_admin_product_pic">
                  <input name="_token" value="<?php echo e(csrf_token()); ?>" type="hidden">
                  <input name="product_id" value="<?php echo e($product->id); ?>" type="hidden">
            <div class="camera_image">
              <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
              <input name="image" id="change_admin_product_pic" type="file">
            </div>
          </form>
        </div>              
        
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>        
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#settings"  data-toggle="tab" aria-expanded="true">Product Information</a></li>
      </ul>
      <div class="tab-content">
        <!-- /.tab-pane -->
        <div class="tab-pane active" id="settings">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name:</label>
              <div class="col-sm-10">
               <p><?php echo e($product->name); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Price:</label>
              <div class="col-sm-10">
               <p><?php echo e($product->price); ?></p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Category:</label>
              <div class="col-sm-10">
               <p><?php echo e($product->category->name); ?></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12" style="margin-left: 100px;">                      
                <a href="<?php echo e(route('product_edit',['id'=>$product->id])); ?>" class="btn btn-primary">Edit</a>
              </div>
            </div>

          </form>
        </div>            
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div> 
<?php $__env->stopSection(); ?>







<?php echo $__env->make('admin.masterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>