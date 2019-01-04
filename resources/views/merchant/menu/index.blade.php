@extends('merchant.template')

@section('content')
<!-- Main content -->
<section class="content">
        <div class="row">
          <div class="col-xs-12">
              <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Menus</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="data" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>Availability</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $i => $menu)    
                        <tr>
                          <td>{{$i+1}}</td>
                          <td>{{$menu->name}}</td>
                          <td>{{$menu->price}}</td>
                          @if($menu->availability==0)
                          <td>Available</td>
                          @else
                          <td>Unavailable</td>
                          @endif
                          <td>{{$menu->created_at}}</td>
                          <td>
                              <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  {{-- <li><a href="#">Edit</a></li>
                                  <li><a href="#">Delete</a></li> --}}
                                  {!! Form::open(['route' => ['merchant.menu.edit', $menu->id], 'method'=> 'GET']) !!}
                                    <li><button type="submit" class="btn btn-block btn-warning btn-flat" data-toggle="tooltip" title="Edit">
                                            Edit
                                    </button></li>
                              {!! Form::close()  !!}
                              {!! Form::open(['route' => ['merchant.menu.destroy', $menu->id], 'method' => 'DELETE']) !!}
                                    <li><button type="submit" class="btn btn-block btn-danger btn-flat" data-toggle="tooltip" title="Delete">
                                            Delete
                                    </button></li>
                              {!! Form::close()  !!}
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
              <!-- /.row -->
            </section>
            <!-- /.content -->

@endsection