<?php $__env->startSection('content'); ?>
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <?php echo $__env->make('general_partials.error_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">User Information</a></li>
                        <li><a href="#tab2default" data-toggle="tab">Change Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal" action="<?php echo e(route('update_user',['id'=>$user->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">User Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="<?php if(!empty($user->profile->username)): ?><?php echo e($user->profile->username); ?><?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="phone" value="<?php if(!empty($user->profile->phone)): ?><?php echo e($user->profile->phone); ?><?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCountry" class="col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-10">
                                        <select name="gender" class="form-control">
                                            <option selected disabled>Select a gender</option>
                                            <option value="male" <?php echo e($user->profile->gender == 'male' ? 'selected' : ''); ?>>Male</option>
                                            <option value="female" <?php echo e($user->profile->gender == 'female' ? 'selected' : ''); ?>>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-2 control-label">Date of Birth</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="d_o_b" value="<?php if(!empty($user->profile->d_o_b)): ?><?php echo e($user->profile->d_o_b); ?><?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="verified" class="form-control">
                                            <option selected disabled>Select a status</option>
                                            <option value="1" <?php echo e($user->verified == '1' ? 'selected' : ''); ?>>Active</option>
                                            <option value="0" <?php echo e($user->verified == '0' ? 'selected' : ''); ?>>Deactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCountry" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="file" name="profile_pic" class="filePath " data-class="img1">
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="img1" download>
                                                <img src="" class="img1" width="50px" />
                                                <span class="img1" style="display:none; color:#FF0000;">
                                                File Download
                                                </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab2default">
                             <form class="form-horizontal" action="<?php echo e(route('update_password',['id'=>$user->id])); ?>" method="post" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>                                
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" value=""  name="old_password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="confirmation_password">
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Update</button>
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