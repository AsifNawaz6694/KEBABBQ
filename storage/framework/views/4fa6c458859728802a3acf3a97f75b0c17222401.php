<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-xs-12">
                <?php echo $__env->make('general_partials.error_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Orders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>                                  
                                    <th>Customer Email</th>                                  
                                    <th>Customer Phone</th>                                  
                                    <th>Customer Country</th>                                  
                                    <th>Order Status</th>                                  
                                    <th>Order Date</th>                                  
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php if( isset($order->first_name) && isset($order->last_name) ): ?> 
                                                     <?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?> 
                                             <?php endif; ?>
                                        </td>
                                        <td>
                                        <?php if( isset($order->email) ): ?> 
                                            <?php echo e($order->email); ?>

                                        <?php endif; ?>
                                        </td>
                                        <td>
                                        <?php if( isset($order->phone) ): ?> 
                                            <?php echo e($order->phone); ?>

                                        <?php endif; ?>                                        
                                        </td>
                                        <td>
                                            <?php if( isset($order->country) ): ?> 
                                                <?php echo e($order->country); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if(isset($order->status)): ?>
                                                <?php if($order->status == 0): ?>
                                                    Pending
                                                <?php elseif($order->status == 1): ?>
                                                    Accepted
                                                <?php elseif($order->status == 2): ?>
                                                    Rejected
                                                <?php else: ?>
                                                <?php endif; ?>    
                                            <?php endif; ?>    

                                        </td>
                                        <td>
                                            <?php if( isset($order->created_at) ): ?> 
                                                <?php echo e($order->created_at); ?>

                                            <?php endif; ?>                                            
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="<?php echo e(route('confirm-order',['id' => $order->id])); ?>">Processed</a></li>
                                                    <li><a href="<?php echo e(route('reject-order',['id' => $order->id])); ?>">Rejected</a></li>
                                                    <?php if(isset($order->id)): ?>
                                                    <li><a href="<?php echo e(route('order_view',['id' =>  $order->id])); ?>">View</a></li>  
                                                    <?php endif; ?>  
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.masterlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>