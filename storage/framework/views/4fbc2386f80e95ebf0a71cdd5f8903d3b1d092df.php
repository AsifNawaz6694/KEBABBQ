<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-xs-12">
                <?php echo $__env->make('general_partials.error_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Products List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>                                   
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product->name); ?></td>          
                                        <td><?php echo e($product->price); ?></td>
                                        <td><?php echo e($product->category->name); ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="<?php echo e(route('product_edit',['id'=>$product->id])); ?>">Edit</a></li>
                                                    <li><a href="<?php echo e(route('product_view',['id' => $product->id])); ?>">View</a></li>
                                                    <li><a href="<?php echo e(route('delete_product',['id' => $product->id])); ?>">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    <div class="s_button">
                            <a class="btn btn-primary" href="<?php echo e(route('create_product')); ?>">Create</a>
                        </div>  
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.masterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>