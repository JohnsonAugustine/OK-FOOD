@extends('merchant.template')

@section('content')
                    <!-- Bootstrap Forms Validation -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Update Category</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation (.js-validation-bootstrap class is initialized in js/pages/be_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    {!! Form::model($category, ['route' => ['merchant.category.update', $category->id], 'method' => 'PUT', 'files' => true]) !!}

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Restaurant <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                            <select class="form-control" name="restaurant_id">
                                                    @foreach($restaurants as $restaurant)
                                                    <option value='{{ $restaurant->id }}'>{{ $restaurant->name }}</option>
                                                    @endforeach
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}  
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-10 ml-auto">
                                            {{ Form::submit('Update', array('class' => 'btn btn-alt-primary', 'style' => 'margin-top: 0px;')) }}
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>

                        </div>
                    </div>
@endsection                    