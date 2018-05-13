                   <?php if(Session::has('result') && Session::get('result')==true): ?>
                        <div class="alert alert-success">
                          <strong>Success!</strong> <?php echo e(Session::get('msg')); ?>.
                        </div>
                          <?php echo e(Session::forget('result')); ?>

                          <?php echo e(Session::forget('msg')); ?>                                    
                    <?php endif; ?>

                    <?php if(Session::has('result') && Session::get('result')==false): ?>
                        <div class="alert alert-danger">
                          <strong>Error!</strong> <?php echo e(Session::get('msg')); ?>.
                          <?php echo e(Session::forget('result')); ?>

                          <?php echo e(Session::forget('msg')); ?>

                        </div>                        
                    <?php endif; ?>                    