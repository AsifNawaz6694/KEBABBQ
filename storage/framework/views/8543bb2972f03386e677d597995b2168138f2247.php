<?php $__env->startSection('content'); ?>
<section class="services sections active" id="services" style="background:#fff;">
   <?php echo $__env->make('general_partials.error_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <div class="container">
      <div class="row">
         <div class="cart-page">
            <!-- Breadcrumb -->
            <div class="container">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item text-uppercase">
                     <a href="" class="text-primary">Home</a>
                  </li>
                  <li class="breadcrumb-item active text-uppercase">Cart</li>
               </ol>
            </div>
            <!-- Shopping Cart Section-->
            <section class="cart">
               <div class="container">
                  <?php if(Cart::count() > 0 ): ?>
                  <h2 style="margin-left: 0px;">Total Items In Cart(<?php echo e(Cart::count()); ?>)</h2>
                  <hr>
                  <br>              
                  <table class="table table-hover card-table" id="order_table">
                     <thead>
                        <tr>
                           <th>Image</th>
                           <th style="text-align: left;">Name</th>
                           <th>Price</th>
                           <th class="col-md-1">Quantity</th>
                           <!--  <th>Total</th> -->
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                       
                        <tr>
                           <td>
                              <img src="<?php echo e(asset('public/storage/products-images/' . $item->model->image)); ?>" alt="product" class="img-fluid">
                           </td>
                           <td><?php echo e($item->name); ?></td>
                           <td class="price_value">
                              <input type="hidden" name="price" class="price" value="<?php echo e($item->price); ?>">
                              <p> <?php echo e($item->price); ?> </p>
                           </td>
                           <td class="col-md-1">
                              <input type="number" data-message="<?php echo e($key); ?>" value="<?php echo e($item->qty); ?>" min="1" class="form-control quantity_value" >
                           </td>
                           <!-- <td class="col-md-2"><?php echo e(Cart::total()); ?></td> -->
                           <td>
                              <form action="<?php echo e(route('remove_cart',$item->rowId)); ?>" method="POST">
                                 <?php echo e(csrf_field()); ?>

                                 <?php echo e(method_field('DELETE')); ?>

                                 <button type="submit" class="btn btn-danger">Remove</button>
                                 
                              </form>
                           </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
                  <?php else: ?>
                  <h2>No Item Exist In Cart</h2>
                  <?php endif; ?>
                  <div class="row">
                     <div class="col-md-12">
                        <p class="total_price_value">
                           <b>Total Amount : </b>
                           <span></span>
                        </p>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Step Arrow-->
            <!-- Shipping section-->
            <section class="shipping">
               <div class="container">
                  <div class="form-holder">
                     <form id="shipping-address-form" action="<?php echo e(route('place_order')); ?>" method="post" class="custom-form" novalidate="novalidate">
                        <?php echo e(csrf_field()); ?>

                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="id[]" value="<?php echo e($item->id); ?>">
                        <input type="hidden" id="quantity_<?php echo e($key); ?>" name="quantity[]" value="<?php echo e($item->qty); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" name="total_price" class="total_price_value_input" value="">
                        
                        <!-- Main Shipping Address -->
                        <div class="shipping-main">
                           <h3 class="heading-line">Invoice Address</h3>
                           <div class="row">
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="first_name" placeholder="First Name" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="last_name" placeholder="Last Name" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="email" name="email" placeholder="Email Address" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="phone" placeholder="Phone Number" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-12 form-group">
                                 <input type="text" name="address" placeholder="Address" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="city" placeholder="City" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="postal_code" placeholder="Postal Code" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <input type="text" name="region" placeholder="Region" required="" class="form-control" aria-required="true">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <select name="country" title="Country" class="country form-control">
                                    <option value=""> </option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- Alternative Shipping Address             -->
                        <!-- <div class="shipping-alternative">
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
                           </div> -->
                        <!-- Payment Method    -->
                        <!--  <div class="payment-method">
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
                           </div> -->
                        <div class="col-sm-12 text-center">
                           <button id="shipping-submit" type="submit" class="oder-now btn btn-unique btn-lg">Order Now <i class="icon-shipping-truck"></i></button>
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