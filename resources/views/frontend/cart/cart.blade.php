@extends('frontend.layouts.app')
@section('content')
<section class="services sections active" id="services" style="background:#fff;">   
   @include('general_partials.error_section')
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
                  @if(Cart::count() > 0 )
                  <h2 style="margin-left: 0px;">Total Items In Cart({{ Cart::count() }})</h2> 
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
                        @foreach(Cart::content() as $item)                       
                        <tr>
                           <td>
                              <img src="{{ asset('public/storage/products-images/' . $item->model->image) }}" alt="product" class="img-fluid">
                           </td>
                           <td>{{ $item->name }}</td>
                           <td class="price_value">
                              <input type="hidden" name="price" class="price" value="{{ $item->price }}">
                             <p> {{ $item->price }} </p>
                           </td>
                           <td class="col-md-1">
                              <input type="number" value="1" min="1" class="form-control quantity_value" >
                           </td>
                           <!-- <td class="col-md-2">{{ Cart::total() }}</td> -->
                           <td>
                              <form action="{{ route('remove_cart',$item->rowId) }}" method="POST">
                                 {{ csrf_field() }}
                                 {{ method_field('DELETE') }}
                                 <button type="submit" class="btn btn-danger">Remove</button>
                              {{-- <a href="#"><i class="fa fa-close"></i></a> --}}
                              </form>

                           </td>
                        </tr>
                        @endforeach()
                     </tbody>
                  </table>
                  @else
                  <h2>No Item Exist In Cart</h2>
                  @endif
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
                     <form id="shipping-address-form" action="#" method="post" class="custom-form" novalidate="novalidate">

                        @foreach(Cart::content() as $item)
                        <input type="hidden" name="id[]" value="">
                        @endforeach

                        <input type="hidden" name="total_price" class="total_price_value_input" value="">
                        <input type="hidden" name="form-name" value="shipping-address-form">
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
@endsection