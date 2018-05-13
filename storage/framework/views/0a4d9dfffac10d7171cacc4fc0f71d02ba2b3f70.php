<?php $__env->startSection('content'); ?>
<!-- =========    HEADER END    ======== -->
<!-- =========    ABOUT START    ======== -->
<section class="about" id="about" data-scroll-index="1">
   <div class="container-fluid">
      <div class="row">
         <!-- PICTURE -->
         <div class="left-p col-md-5">
            <div class="img-border-medium"></div>
         </div>
         <!-- ABOUT CONTENT -->
         <div class="about-c col-md-7">
            <div class="about-content">
               <h2>Welcome To KEBABBQ</h2>
               <p>Serving delicious juicy BBQ food at parties with live catering or get it delivered at your home.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =========    ABOUT END    ======== -->
<!-- =========    SERVICES START    ======== -->
<section class="services sections" id="services" data-scroll-index="2" style="background:#fff;">
   <div class="container">
      <div class="row">
         <!-- SECTION TITLE -->
         <div class="s-title">
            <h4>Our Popular Dishes</h4>
            <hr>
         </div>
         <!-- SERVICES -->
         <div class="services-list">
            <ul>
               <!-- SERVICE ITEM -->
               <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li class="col-md-4">
                  <div class="item-content">
                     <img src="<?php echo e(asset('public/storage/products-images/' . $product->image)); ?>">                  
                     <h3><?php echo e($product->name); ?></h3>  
                     <a class="addCrtBtn" href="#">Add To Cart</a>                   
                  </div>
               </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- =========    SERVICES END    ======== -->
<section>
   <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fkebabbq.qa%2Fvideos%2F762912290580288%2F&show_text=0&width=560"></iframe>
   </div>
</section>
<!--testimonials-->
<section class="testimonials">
   <div class="testimonials-overlay sections">
      <div class="container">
         <div class="row">
            <span class="icon icon-quote">TESTIMONIAL</span>
            <div class="owl-carousel owl-theme">
               <!-- TESTIMONIALS ITEM -->
               <div class="t-item">
                  <div class="testimonial-box col-md-10 col-xs-10">
                     <p>The kebabs from kebabbq are out of this world! The succulent meat is unbelievably juicy, tender and moist with every bite and the spices have been balanced in such a way that the kebabs are amazingly tasty yet mild enough for kids and adults alike.</p>
                     <!-- TESTIMONIAL NAME -->
                     <h3>Farzana Habib</h3>
                  </div>
               </div>
               <!-- TESTIMONIALS ITEM -->
               <div class="t-item">
                  <div class="testimonial-box col-md-10 col-xs-10">
                     <p>For the best kebabs a visit to Kebabbq is a must. You will not be disappointed as the food is the best. Recipes are from a champion. Exceptional food is an understatement.</p>
                     <!-- TESTIMONIAL NAME -->
                     <h3>Arfan Mohammed</h3>
                  </div>
               </div>
               <!-- TESTIMONIALS ITEM -->
               <div class="t-item">
                  <div class="testimonial-box col-md-10 col-xs-10">
                     <p>Me and my family had the Kebabs yesterday believe me they were the best kebabs we have ever had in Qatar truly authentic and delicious Allahuma baarik. Can't wait to have them again.....</p>
                     <!-- TESTIMONIAL NAME -->
                     <h3>Shareen Hussain</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--testimonials-->
<!-- ====== FACTS START ======  -->
<section class="facts sections"></section>
<!-- ====== FACTS END ======  -->
<!-- =========    CONTACT START    ======== -->
<section class="contact sections" id="contact" data-scroll-index="6">
   <div class="container">
      <div class="row">
         <!-- SECTION TITLE -->
         <div class="s-title">
            <h4>Contact Us</h4>
         </div>
         <!-- CONTACT INFO START  -->
         <div class="contact-info col-md-12">
            <div class="item col-md-4 col-sm-12">
               <span class="icon icon-mobile"></span>
               <h6 class="ctit">Phone</h6>
               <h5> <a href="tel:+974 77705525">+974 77705525</a></h5>
            </div>
            <div class="item col-md-4 col-sm-12">
               <span class="icon icon-envelope"></span>
               <h6 class="ctit">Email</h6>
               <h5>kebabbq@gmail.com</h5>
            </div>
            <div class="item col-md-4 col-sm-12">
               <span class="icon icon-map-pin"></span>
               <h6 class="ctit">Address</h6>
               <h5>Ringer House, Ibn Mahmoud Street, Fereej Bin Mahmoud, Doha </h5>
            </div>
         </div>
         <!-- CONTACT INFO END  -->
         <!-- CONTACT FORM START -->
         <div class="contact-form">
            <form id="contactForm" action="<?php echo e(route('contact_form')); ?>" method="POST" class="cont-fo">
               <?php echo e(csrf_field()); ?>

               <div class="col-md-6">
                  <div class="contact-item col-md-12">
                     <input type="text" name="name" placeholder="Name *" required="required">
                  </div>
                  <div class="contact-item col-md-12">
                     <input type="email" name="email" placeholder="Email *" required="required">
                  </div>
                  <div class="contact-item col-md-12">
                     <input type="text" name="subject" placeholder="Subject">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="contact-item col-md-12">
                     <textarea id="form_message" name="message" placeholder="Message *" rows="4" required="required" data-error="Message."></textarea>
                  </div>
               </div>
               <div class="contact-item btn-col col-md-12">
                  <input type="submit" class="button disabled" value="Send Message">
               </div>
            </form>
         </div>
         <!-- CONTACT FORM END -->
      </div>
   </div>
</section>
<!-- =========    CONTACT END    ======== -->
<!-- =========    GOOGLE MAP START    ======== -->
<div id="map"></div>
<!-- =========    GOOGLE MAP END    ======== -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>