@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <div class="col-xs-12">
                @include('general_partials.error_section')
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Orders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>                                  
                                    <th>Customer Email</th>                                  
                                    <th>Customer Phone</th>                                  
                                    <th>Customer Country</th>                                  
                                    <th>Order Status</th>                                  
                                    <th>Order Date</th>                                  
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>
                                            @if( isset($order->first_name) && isset($order->last_name) ) 
                                                     {{ $order->first_name }} {{ $order->last_name }} 
                                             @endif
                                        </td>
                                        <td>
                                        @if( isset($order->email) ) 
                                            {{ $order->email }}
                                        @endif
                                        </td>
                                        <td>
                                        @if( isset($order->phone) ) 
                                            {{ $order->phone }}
                                        @endif                                        
                                        </td>
                                        <td>
                                            @if( isset($order->country) ) 
                                                {{ $order->country }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset($order->status))
                                                @if($order->status == 0)
                                                    Pending
                                                @elseif($order->status == 1)
                                                    Accepted
                                                @elseif($order->status == 2)
                                                    Rejected
                                                @else
                                                @endif    
                                            @endif    

                                        </td>
                                        <td>
                                            @if( isset($order->created_at) ) 
                                                {{ $order->created_at }}
                                            @endif                                            
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="{{route('confirm-order',['id' => $order->id])}}">Processed</a></li>
                                                    <li><a href="{{route('reject-order',['id' => $order->id])}}">Rejected</a></li>
                                                    @if(isset($order->id))
                                                    <li><a href="{{route('order_view',['id' =>  $order->id]) }}">View</a></li>  
                                                    @endif  
                                                </ul>
                                            </div>
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