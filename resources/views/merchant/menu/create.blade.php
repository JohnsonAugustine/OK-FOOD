@extends('merchant.template')

@section('content')

<section class="content">
        <div class="row">  
<!-- right column -->
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Create Category</h3>
      </div>
                <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                {!! Form::open(['route' => 'merchant.menu.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="val-username">Category <span class="text-danger">*</span></label>
                        <div class="col-sm-10" style="margin-bottom:10px;">
                        <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                <option value='{{ $category->id }}'>{{ $category->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="val-username">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-10" style="margin-bottom:10px;">
                            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="val-username">Description <span class="text-danger">*</span></label>
                        <div class="col-sm-10" style="margin-bottom:10px;">
                            {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="val-username">Price <span class="text-danger">*</span></label>
                        <div class="col-sm-10" style="margin-bottom:10px;">
                            {{ Form::text('price', null, array('class' => 'form-control', 'required' => '')) }}  
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="col-sm-2 control-label" for="val-username">Availability</label>
                            <div class="col-sm-10" style="margin-bottom:10px;">
                                {{ Form::select('availability', ['1' => 'Available', '0' => 'Not Available'], null, ['required' => 'required', 'class' => 'form-control', 'placeholder' => 'Is Available?']) }}  
                            </div>
                        </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="val-username">Image</label>
                        <div class="col-sm-10" style="margin-bottom:10px;">
                        {{ Form::file('image', array('required' => 'required')) }}

                        </div>
                    </div>

                  
                    <div class="box-footer">
                            <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-info pull-right">Create</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        </div>
</section>
@endsection                    