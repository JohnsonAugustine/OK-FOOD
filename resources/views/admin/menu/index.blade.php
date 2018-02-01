@extends('admin.template')

@section('content')
 <!-- Main Container -->
 <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                <div class="row gutters-tiny">

                    <!-- <h2 class="content-heading">Table Menus</h2> -->
                    <div class="col-md-6 col-xl-6">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-circle-o fa-2x text-info-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="{{$menus->count()}}">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Menu</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END All Products -->

                        

                        <!-- Add Product -->
                        <div class="col-md-6 col-xl-6">
                            <a class="block block-rounded block-link-shadow" href="{{url('/admin/menu/create')}}">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-archive fa-2x text-success-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-success">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">New Menu</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Add Product -->
                    </div>
                    <!-- END Overview -->
                    <div class="block block-rounded">
                        <div class="block-content bg-body-light">
                            <!-- Search -->
                            <form action="be_pages_ecom_products.html" method="post" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search category..">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Search -->
                        </div>
                    <!-- Full Table -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Menus</h3>
                        </div>
                        <div class="block-content">
                            <!-- <p>The first way to make a table responsive, is to wrap it with <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>. This way the table will be horizontally scrollable and all data will be accessible on smaller screens (&lt; 768px).</p> -->
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 100px;"><i class="fa fa-glass"></i></th>
                                            <th>Name</th>
                                            <th style="width: 30%;">Category</th>
                                            <th style="width: 15%;">Price</th>
                                            <th style="width: 15%;">Availability</th>
                                            <th class="text-center" style="width: 100px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="{{ asset('images/' . $menu->image) }}" alt="">
                                            </td>
                                            <td class="font-w600">{{$menu->name}}</td>
                                            <td>{{$menu->category->name}}</td>
                                            <td>{{$menu->price}}</td>
                                            <td>
                                                @if($menu->availability==1) 
                                                <span class="badge badge-success">Available</span>
                                                @else
                                                <span class="badge badge-danger">Not Available</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    {!! Form::open(['route' => ['admin.menu.edit', $menu->id], 'method'=> 'GET']) !!}
                                                    <button type="submit" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    {!! Form::close()  !!}
                                                    {!! Form::open(['route' => ['admin.menu.destroy', $menu->id], 'method' => 'DELETE']) !!}
                                                    <button type="submit" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    {!! Form::close()  !!}
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Full Table -->

@endsection