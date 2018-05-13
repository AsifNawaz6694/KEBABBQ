<?php $__env->startSection('content'); ?>
<section class="services sections" id="services" data-scroll-index="2" style="background:#fff;">
   <div class="container">
      <div class="row">
         <div class="cart-page">
            <!-- Breadcrumb -->
            <div class="container">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item text-uppercase">
                     <a href="" class="text-primary">Home</a>
                  </li>
                  <li class="breadcrumb-item active text-uppercase">Shopping Cart</li>
               </ol>
            </div>
            <!-- Shopping Cart Section-->
            <section class="cart">
               <div class="container">
                  <table class="table table-hover card-table">
                     <thead>
                        <tr>
                           <th colspan="2">Product</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Total</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td >
                              <img src="<?php echo e(asset('public\front_assets\images/bbq-cover.jpg')); ?>" alt="product" class="img-fluid">
                           </td>
                           <td class="col-md-3">Fast telephoto zoom lense nano crystal</td>
                           <td>$500</td>
                           <td class="col-md-1">
                              <input type="number" value="1" class="form-control">
                           </td>
                           <td class="col-md-2">$500</td>
                           <td class="col-md-1">
                              <a href="#"><i class="fa fa-close"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td >
                              <img src="<?php echo e(asset('public\front_assets\images/bbq-cover.jpg')); ?>" alt="product" class="img-fluid">
                           </td>
                           <td class="col-md-3">Fast telephoto zoom lense nano crystal</td>
                           <td>$500</td>
                           <td class="col-md-1">
                              <input type="number" value="1" class="form-control">
                           </td>
                           <td class="col-md-2">$500</td>
                           <td class="col-md-1">
                              <a href="#"><i class="fa fa-close"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td >
                              <img src="<?php echo e(asset('public\front_assets\images/bbq-cover.jpg')); ?>" alt="product" class="img-fluid">
                           </td>
                           <td class="col-md-3">Fast telephoto zoom lense nano crystal</td>
                           <td>$500</td>
                           <td class="col-md-1">
                              <input type="number" value="1" class="form-control">
                           </td>
                           <td class="col-md-2">$500</td>
                           <td class="col-md-1">
                              <a href="#"><i class="fa fa-close"></i></a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </section>
            <!-- Step Arrow-->
            <!-- Shipping section-->
            <section class="shipping">
               <div class="container">
                  <div class="form-holder">
                     <form id="shipping-address-form" action="#" method="post" class="custom-form" novalidate="novalidate">
                        <input type="hidden" name="form-name" value="shipping-address-form">
                        <!-- Main Shipping Address -->
                        <div class="shipping-main">
                           <h3 class="heading-line">Invoice Address</h3>
                           <div class="row">
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="firstname" placeholder="First Name" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="lastname" placeholder="Last Name" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="email" name="email" placeholder="Email Address" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="number" placeholder="Phone Number" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-8 form-group">
                                 <input type="text" name="address-1" placeholder="Address" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-4 form-group">
                                 <input type="text" name="address-2" placeholder="Apt, Suit, etc." required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="city" placeholder="City" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="postalcode" placeholder="Postal Code" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="region" placeholder="Region" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <select name="country" title="Country" class="country form-control">
                                    <option value=""> </option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- Alternative Shipping Address             -->
                        <div class="shipping-alternative">
                           <h3 class="heading-line">Shipping Address</h3>
                           <div class="row">
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="sfirstname" placeholder="First Name" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="slastname" placeholder="Last Name" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="email" name="semail" placeholder="Email Address" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="snumber" placeholder="Phone Number" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-8 form-group">
                                 <input type="text" name="saddress-1" placeholder="Address" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-4 form-group">
                                 <input type="text" name="saddress-2" placeholder="Apt, Suit, etc." required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="scity" placeholder="City" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="spostalcode" placeholder="Postal Code" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="sregion" placeholder="Region" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <select name="country" title="Country" class="country form-control">
                                    <option value=""> </option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- Payment Method    -->
                        <div class="payment-method">
                           <h3 class="heading-line">Payment Method</h3>
                           <div class="row">
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="cardname" placeholder="Name On Card" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="cardnumber" placeholder="Card Number" maxlength="14" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-4 form-group">
                                 <input type="text" name="expirymonth" placeholder="Expiry Month" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-4 form-group">
                                 <input type="text" name="expiryyear" placeholder="Expiry Year" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-4 form-group">
                                 <input type="text" name="cvv" placeholder="CVV" maxlength="3" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-12 text-center">
                                 <button id="shipping-submit" type="submit" class="oder-now btn btn-unique btn-lg">Order Now <i class="icon-shipping-truck"></i></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
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