@extends('admin.masterlayout')
@section('content')
<div class="row">          
  <!-- /.col -->
  <div class="col-md-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#settings"  data-toggle="tab" aria-expanded="true">Category Information</a></li>
      </ul>
      <div class="tab-content">
        <!-- /.tab-pane -->
        <div class="tab-pane active" id="settings">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name:</label>
              <div class="col-sm-10">
               <p>{{ $category->name }}</p>
              </div>
            </div>           
            <div class="form-group">
              <div class="col-sm-12" style="margin-left: 100px;">
                <a href="{{route('category_edit',['id'=>$category->id])}}" class="btn btn-primary">Edit</a>
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






