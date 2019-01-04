@extends('merchant.template')

@section('content')

<section class="content">
        <div class="row">  
<!-- right column -->
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Create Restaurant</h3>
      </div>
                                    {!! Form::open(['route' => 'merchant.restaurant.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                                        {{ csrf_field() }}

                                        <input name="merchant_id" id="merchant_id" hidden value="{{Auth::user()->id}}"/>
                                        <!--DEFAULT VALUE 1-->
                                        <input name="group_menu_id" id="group_menu_id" hidden value="1"/>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-username">Type <span class="text-danger">*</span></label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            <select class="form-control" name="type_id">
                                                    @foreach($types as $type)
                                                    <option value='{{ $type->id }}'>{{ $type->name }}</option>
                                                    @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-email">Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-password">Description <span class="text-danger">*</span></label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-confirm-password">City <span class="text-danger">*</span></label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::text('city', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-currency">District <span class="text-danger">*</span></label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::text('district', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-website">Street <span class="text-danger">*</span></label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::text('street', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-phoneus">Contact <span class="text-danger">*</span></label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::text('contact', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="val-number">Latitude </label>
                                            <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::text('latitude', null, array('class' => 'form-control', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-2 control-label" for="val-number">Longitude </label>
                                        <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::text('longitude', null, array('class' => 'form-control', 'maxlength' => '255')) }}
                                            </div>
                                        </div>

                                        <input name="is_active" id="is_active" hidden value="0"/>

                                        
                                        <div class="form-group">
                                        <label class="col-sm-2 control-label" for="val-number">Open <span class="text-danger">*</span></label>
                                        <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::time('open', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-sm-2 control-label" for="val-number">Close <span class="text-danger">*</span></label>
                                        <div class="col-sm-10" style="margin-bottom: 10px;">
                                            {{ Form::time('close', null, array('class' => 'form-control', 'required' => '', 'type' => 'time')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="col-sm-2 control-label" for="val-digits">Image <span class="text-danger">*</span></label>
                                                <div class="col-sm-10" style="margin-bottom: 10px;">
                                                {{ Form::file('image', array('required' => 'required')) }}
                                                </div>
                                        </div>
                                        
                                        <div class="box-footer">
                                                <button type="submit" class="btn btn-info pull-right">Create</button>
                                        </div>
                                        {!! Form::close() !!}

                            </div>

                        </div>
                    <!-- Bootstrap Forms Validation -->
@endsection
