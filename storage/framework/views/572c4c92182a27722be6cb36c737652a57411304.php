<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <?php if(!empty(Auth::user()->profile->profile_pic)): ?>
        <img src="<?php echo e(asset('public/storage/profile-pictures/'.Auth::user()->profile->profile_pic)); ?>" class="img-responsive img-circle" height="10px;" width="10px;" alt="User Image"
        >
        <?php else: ?>
        Image Donot Exist
        <?php endif; ?>
      </div>
      <div class="pull-left info">
        <p><?php echo e(Auth::user()->fullname); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <br>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">PAGES</li>
      <li><a href="<?php echo e(route('users')); ?>"><i class="fa fa-user text-aqua"></i> <span>My Account</span></a></li>

      <li><a href="<?php echo e(route('categories')); ?>"><i class="fa fa-bars text-aqua"></i> <span>Category</span></a></li>

      <li><a href="<?php echo e(route('products')); ?>"><i class="fa fa-bars text-aqua"></i> <span>Products</span></a></li>

      <li><a href=""><i class="fa fa-bars text-aqua"></i> <span>Orders</span></a></li>

      <li><a href=""><i class="fa fa-bars text-aqua"></i> <span>Transactions</span></a></li>
      
     
      <li class="treeview">
         <a href="#">
           <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu" style="display: none;">
           <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
           <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
         </ul>
       </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>