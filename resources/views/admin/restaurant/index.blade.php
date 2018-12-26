@extends('admin.template')

@section('content')


<!-- Project Filtering (.js-filter class is initialized in Codebase() -> uiHelperContentFilter()) -->
<!-- If data-numbers="true" is added, then the number of the items of each category will be auto added to each category link -->
<div class="js-filter">
    <!-- Navigation -->
    <div class="content">
                    <!-- Overview -->
                    <h3 class="content-heading">Overview</h3>
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
                                        <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="{{$restaurants->count()}}">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Restaurant</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END All Products -->

                        

                        <!-- Add Product -->
                        <div class="col-md-6 col-xl-6">
                            <a class="block block-rounded block-link-shadow" href="{{url('/admin/restaurant/create')}}">
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
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">New Restaurant</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Add Product -->
                    </div>
    <!-- END Navigation -->

                <h4></h4>
                    <div class="row">
                    @foreach($restaurants as $restaurant)
                        <div class="col-md-6 col-xl-3">
                            <!-- Developer Plan -->
                            <a class="block block-rounded text-center" href="{{ url('/admin/restaurant/') }}/{{ $restaurant->id }}">
                                <div class="block-header">
                                    <h3 class="block-title">{{$restaurant->name}}</h3>
                                </div>
                                <img src="{{ asset('images/' . $restaurant->image) }}" width="225" height="120">
                            </a>
                            <!-- END Developer Plan -->
                        </div>
                    @endforeach
                    </div>
                    <!-- END Modern Design -->
    <!-- END Projects -->

    <!-- Quick Stats -->
    <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
    <div class="bg-white push">
        <div class="row text-center">
            <!-- <div class="col-sm-4 py-30">
                <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="3">0</div>
                <div class="font-w600 text-muted text-uppercase">Active</div>
            </div>
            <div class="col-sm-4 py-30">
                <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="12">0</div>
                <div class="font-w600 text-muted text-uppercase">Projects</div>
            </div>
            <div class="col-sm-4 py-30">
                <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="9">0</div>
                <div class="font-w600 text-muted text-uppercase">Clients</div>
            </div> -->
        </div>
    </div>
    
    <!-- END Quick Stats -->
</div>
<!-- END Project Filtering -->
</div>

<!-- END Page Content -->
</main>

@endsection