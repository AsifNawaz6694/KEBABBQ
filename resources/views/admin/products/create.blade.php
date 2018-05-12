@extends('admin.masterlayout')
@section('content')
<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab">Product Information</a></li>
            </ul>
            <div class="tab-content">
                <!-- /.tab-pane -->
                <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" action="{{route('store_product')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="price">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control">                        
                                @foreach($categories as $value)   
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                                              
                        <div class="form-group">
                            <label for="inputCountry" class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="file" name="image" class="filePath" data-class="img1">
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="" class="img1" download>
                                            <img src="" class="img1" width="50px"/>
                                            <span class="img1" style="display:none; color:#FF0000;">
                                            File Download
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Create</button>
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