@extends('merchant.template')

@section('content')
                      <!-- Main content -->
    <section class="content">
            <div class="row">  
<!-- right column -->
<div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Category</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          {!! Form::model($category, ['route' => ['merchant.category.update', $category->id], 'method' => 'PUT', 'files' => true]) !!}            <div class="box-body">
              
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="val-username">Restaurant <span class="text-danger">*</span></label>
                    <div class="col-sm-10" style="margin-bottom:20px;">
                    <select class="form-control" name="restaurant_id">
                        @foreach($restaurants as $restaurant)
                            <option value='{{ $restaurant->id }}'>{{ $restaurant->name }}</option>
                         @endforeach
                    </select>
                </div>
                </div>
                 
            
             <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>

                <div class="col-sm-10" style="margin-bottom:20px;">
                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }} 
                </div>
              </div>

            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
            <!-- /.box-footer -->
            {!! Form::close() !!}
        </div>
        <!-- /.box -->
</div>
</section>
@endsection                    