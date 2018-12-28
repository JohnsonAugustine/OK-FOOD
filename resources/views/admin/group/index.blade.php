@extends('admin.template')

@section('content')


                <!-- Page Content -->
                <div class="content">
                    <!-- Overview -->
                    <h2 class="content-heading">Overview</h2>
                    <div class="row gutters-tiny">
                        <!-- All Products -->
                        <div class="col-md-6 col-xl-6">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-circle-o fa-2x text-info-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="{{$groups->count()}}">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Group</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END All Products -->

                        

                        <!-- Add Product -->
                        <div class="col-md-6 col-xl-6">
                            <a class="block block-rounded block-link-shadow" href="{{url('/admin/group/create')}}">
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
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">New Group</div>
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
                        <div class="block-content">
                            <!-- Products Table -->
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">NO</th>
                                        <th style="width: 100px;">Image</th>
                                        <th class="d-none d-sm-table-cell">Name</th>
                                        <th>Created At</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0 ?>
                                @foreach ($groups as $group)
                                <?php $i++ ?>
                                    <tr>
                                        <td>
                                            <span class="text-black">{{$i}}</span>
                                        </td>
                                        <td>
                                        <img src="{{ asset('images/' . $group->icon) }}" width="60" height="20">
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="text-black">{{$group->name}}</span>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="text-black">{{$group->created_at}}</span>
                                        </td>
                                        <td class="text-center">
                                                <div class="btn-group">
                                                    {!! Form::open(['route' => ['admin.group.edit', $group->id], 'method'=> 'GET']) !!}
                                                    <button type="submit" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    {!! Form::close()  !!}
                                                    {!! Form::open(['route' => ['admin.group.destroy', $group->id], 'method' => 'DELETE']) !!}
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

                            
                            <!-- END Products Table -->

                            <!-- Navigation -->
                            <nav aria-label="Products navigation">
                                <div class="pagination justify-content-end">
                                    
                                <div class="pagination justify-content-end">
                                    {!! $groups->links(); !!}
                                </div>
                                    
                                </div>
                            </nav>
                            <!-- END Navigation -->
                        </div>
                    </div>
                    <!-- END Products -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

@endsection