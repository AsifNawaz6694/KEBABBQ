@extends('admin.masterlayout')
@section('content')
<div class="row">       
  <!-- /.col -->
  <div class="col-md-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#settings"  data-toggle="tab" aria-expanded="true">Order Information</a></li>
      </ul>
      <div class="tab-content">
        <!-- /.tab-pane -->
        <div class="tab-pane active" id="settings">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Customer Full Name:</label>
              <div class="col-sm-10">
               <p>{{$orders['first_name']}} {{$orders['last_name']}}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
              <div class="col-sm-10">
              <p>{{$orders['email']}}</p>

              </div>
            </div>
            <div class="form-group">
              <label for="inputPhone" class="col-sm-2 control-label">Phone:</label>
              <div class="col-sm-10">
               <p>{{$orders['phone']}}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputCountry" class="col-sm-2 control-label">Customer Address</label>
              <div class="col-sm-10">
                <p>{{$orders['address']}}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputCountry" class="col-sm-2 control-label">Customer City</label>
              <div class="col-sm-10">
            <p>{{$orders['city']}}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputCountry" class="col-sm-2 control-label">Customer Region</label>
              <div class="col-sm-10">
               <p>{{$orders['region']}}</p>
              </div>
            </div>
              <div class="form-group">
              <label for="inputCountry" class="col-sm-2 control-label">Customer Country</label>
              <div class="col-sm-10">
                <p>{{$orders['country']}}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputStatus" class="col-sm-2 control-label">Status</label>
              <div class="col-sm-10">
              @if($orders->status == 0)
                    Pending
                @elseif($orders->status == 1)
                    Accepted
                @elseif($orders->status == 2)
                    Rejected
                @else
              @endif   
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
 <div class="row">
            <div class="col-xs-12">
                @include('general_partials.error_section')
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">This Order Detailed Summary</h3>
                    </div>
                    <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Product Name</th>                                  
                                    <th>Product Quantity</th>                                  
                                    <th>Product Price</th>                                  
                                    <th>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders_details as $order)
                                    <tr>
                                        <td>
                                            {{$product_data[$order->product_id]->name}}
                                        </td>
                                        <td>
                                          {{$order->quantity}}
                                        </td>
                                        <td>
                                          {{$order->product_price}}                                        
                                        </td>
                                        <td>
                                           {{$order->total_price_name}}
                                        </td>                                       
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
@endsection






