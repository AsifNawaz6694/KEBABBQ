<div class="header-overlay">
   <!-- ====== NAVGITION ======  -->
   <nav class="navbar land-nav navbar-fixed-top">
      <div class="container">
         <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <!-- logo -->
               <a class="logo navbar-brand" href="<?php echo e(route('dashboard')); ?>">
               <span><img src="<?php echo e(asset('public/front_assets/images/keba-logo1.png')); ?>" alt="KEBABBQ Logo"></span>
               </a>
            </div>
            <!-- Collect the nav links, and other content for toggling -->
            <div class="collapse navbar-collapse" id="collapse">
               <!-- links -->
               <ul class="nav navbar-nav navbar-right" id="navbar">
                  <li><a href="home#" data-scroll-nav="0" class="active">Home</a></li>
                  <li><a href="#about" data-scroll-nav="1">About Us</a></li>
                  <!--<li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-scroll-nav="2">Menu <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                     <li class="list_title">Karahi</li>
                     <li><a href="javascript:void(0)">Meat Karahi</a></li>
                     <li><a href="javascript:void(0)">Chicken Karahi</a></li>
                     <li><a href="javascript:void(0)">Mixed Dal</a></li>
                     
                     
                     <li class="list_title">Rice</li>
                     <li><a href="javascript:void(0)">Mutton Biryani</a></li>
                     <li><a href="javascript:void(0)">Chicken Biryani</a></li>
                     
                     
                     <li class="list_title">Sides</li>                  
                     <li><a href="javascript:void(0)">Regular Chips</a></li>
                     <li><a href="javascript:void(0)">Large Chips</a></li>
                     
                     <li class="list_title">Drinks</li>
                     <li><a href="javascript:void(0)">Soft Drinks</a></li>
                     <li><a href="javascript:void(0)">Cooked Tea with Fresh Milk</a></li>
                     
                     <li class="list_title">Wraps</li>
                     <li><a href="javascript:void(0)">Chicken Shawarma (Regular)</a></li>
                     <li><a href="javascript:void(0)">Shawarma (Large)</a></li>
                     
                     
                     <li class="list_title">Grilled</li>
                     <li><a href="javascript:void(0)">Mutton Seekh Kebab</a></li>
                     <li><a href="javascript:void(0)">Mutton Seekh Kebab Roll</a></li>
                     <li><a href="javascript:void(0)">Mutton Seekh Kebab Plate</a></li>
                     <li><a href="javascript:void(0)">Chicken Tikka</a></li>
                     <li><a href="javascript:void(0)">Chicken Tikka Roll</a></li>
                     <li><a href="javascript:void(0)">Chicken Tikka Portion</a></li>
                     <li><a href="javascript:void(0)">Mutton Tikka Roll</a></li>
                     <li><a href="javascript:void(0)">Mutton Tikka</a></li>
                     <li><a href="javascript:void(0)">Mutton Tikka Portion</a></li>
                     <li><a href="javascript:void(0)">Mutton Chops Plate</a></li>
                     <li><a href="javascript:void(0)">Single Mixed Grill</a></li>
                     <li><a href="javascript:void(0)">Full Mixed Grill</a></li>
                     
                     </ul>
                      
                                   
                     
                     </li>-->    
                  <!--mega menu-->
                  <ul class="nav navbar-nav">
                     <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-large row">
                           <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="col-sm-3">
                              <ul>
                                 <li class="dropdown-header"><?php echo e($category->name); ?></li>
                                 <?php $__currentLoopData = $products[$category->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <li><a href="javascript:void(0)"><?php echo e($product->name); ?></a></li>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                           </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                     </li>
                  </ul>
                  <!-- /.nav-collapse -->
                  <!--mega menu-->
                  <li><a href="tel:+974 77705525">Order Now</a></li>
                  <li><a href="#contact" data-scroll-nav="6">Contact</a></li>
                  <li>
                     <a href="<?php echo e(route('cart')); ?>">
                     <span class="fa fa-shopping-cart my-cart-icon">
                     <?php if(Cart::instance('default')->count() > 0 ): ?>
                     <span class="badge badge-notify my-cart-badge">
                        <?php echo e(Cart::instance('default')->count()); ?>

                     </span>
                     <?php endif; ?>
                     <span>
                      CART
                     </span>
                      </span>
                     </a>
                  </li>
                                    
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
      </div>
      <!-- /.container -->
   </nav>
   <!-- ====== END NAVGITION ======  -->
   <!-- Header Content -->
   <div class="middle-c text-center">
      <div class="capt">
         <h1>Welcome To <span>KEBABBQ</span></h1>
         <h3>Delicious juicy BBQ food</h3>
         <!-- Buttons -->
         <div class="header-btn">
            <a href="tel:+974 77705525">Order Now</a>
            <a id="tr-btn" href="#contact" data-scroll-nav="6">Contact Us</a>
         </div>
      </div>
   </div>
   <!-- End Header Content -->
   <!-- Button Scroll -->
   <a href="#about" data-scroll-nav="1">
      <div class="mouse"></div>
   </a>
   <!-- End Button Scroll -->
</div>