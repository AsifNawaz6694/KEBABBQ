@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <!-- /.col -->
            <div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
          
         <div class="image-box">
            @if(!empty($product->image) && isset($product->image))
            <img src="{{asset('public/storage/products-images/'.$product->image) }}" style="height:160px; width:160px" class="profile-user-img img-responsive img-circle">
            @else
            <img src="{{asset('public/storage/products-images/default1.png') }}" style="height:160px; width:160px" class="profile-user-img img-responsive img-circle">
            @endif
            <form action="{{route('ImageUploadProduct')}}" method="post" enctype="multipart/form-data" id="change_admin_product_pic">
                  <input name="_token" value="{{csrf_token()}}" type="hidden">
                  <input name="product_id" value="{{$product->id}}" type="hidden">
            <div class="camera_image">
              <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
              <input name="image" id="change_admin_product_pic" type="file">
            </div>
          </form>
        </div>              
        
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div> 
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Product Information</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal" action="{{route('update_product',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" class="form-control">
                                            @foreach($categories as $value)
                                            <option value="{{ $value->id }}" @if($value->id == $product->category_id) selected="" @endif>
                                                {{ $value->name }}
                                            </option>
                                            @endforeach
                                        </select>
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
@endsection