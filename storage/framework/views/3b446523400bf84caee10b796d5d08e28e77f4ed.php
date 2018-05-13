<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-xs-12">
                <?php echo $__env->make('general_partials.error_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">My Account</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>                                   
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Date Of Birth</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->name); ?></td>             
                                        <td><?php echo e($user->email); ?></td>
                                        <?php if(!empty($user->profile->phone)): ?>
                                        <td><?php echo e($user->profile->phone); ?></td>
                                        <?php else: ?>
                                        <td>No Number</td>
                                        <?php endif; ?>
                                        <?php if(!empty($user->profile->gender)): ?>
                                        <td><?php echo e($user->profile->gender); ?></td>
                                        <?php else: ?>
                                        <td>No Number</td>
                                        <?php endif; ?>
                                        <?php if(!empty($user->profile->d_o_b)): ?>
                                        <td><?php echo e($user->profile->d_o_b); ?></td>
                                        <?php else: ?>
                                        <td>No Number</td>
                                        <?php endif; ?>
                                        <td><?php echo e($user->roles[0]->display_name); ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="<?php echo e(route('user_edit',['id'=>$user->id])); ?>">Edit</a></li>
                                                    <li><a href="<?php echo e(route('user',['id' => $user->id])); ?>">View</a></li>
                                                   
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