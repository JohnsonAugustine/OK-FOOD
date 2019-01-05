@extends('admin.template')

@section('content')
                      <!-- Main content -->
    <section class="content">
            <div class="row">  
<!-- right column -->
<div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Merchant Account</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          {!! Form::model($merchant, ['route' => ['admin.merchants.update', $merchant->id], 'method' => 'PUT', 'files' => true]) !!}           
           <div class="box-body">
                 
            
             <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10" style="margin-bottom:20px;">
                        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }} 
                </div>
              </div>

              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
  
                  <div class="col-sm-10" style="margin-bottom:20px;">
                          {{ Form::email('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }} 
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
    
                    <div class="col-sm-10" style="margin-bottom:20px;">
                            {{ Form::password('password', array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }} 
                    </div>
                  </div>

            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{url()->previous()}}" class="btn btn-default">Cancel</a>
              {{ Form::submit('Update', array('class' => 'btn btn-info pull-right', 'style' => 'margin-top: 0px;')) }}
            </div>
            <!-- /.box-footer -->
            {!! Form::close() !!}
        </div>
        <!-- /.box -->
</div>
</section>
@endsection                    