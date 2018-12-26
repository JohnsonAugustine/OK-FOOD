@extends('admin.template')

@section('content')

 <!-- Main Container -->
 <main id="main-container">
                <!-- Page Content -->
                <!-- Main Content -->
                <div class="content">
                    <!-- Projects -->
                    <h2 class="content-heading">
                        <a href="{{url('/admin/promotion/create')}}"><button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">New Promotion..</button>
                        <i class="si si-trophy mr-5"></i> Promotions</a>
                    </h2>
                    <div class="row items-push">
                        <div class="col-md-6 col-xl-3">
                            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                                <div class="ribbon-box">$2500</div>
                                <div class="block-content block-content-full">
                                    <div class="item item-circle bg-danger text-danger-light mx-auto my-20">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="text-warning">
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600 mb-5">Website Design</div>
                                    <div class="font-size-sm text-muted">https://example.com</div>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-rounded btn-alt-success" href="{{url('/admin/$promotion->id/edit')}}">
                                        <i class="fa fa-plus mr-5"></i>Edit
                                    </a>
                                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-user-circle mr-5"></i>Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END Projects -->

                    <!-- Colleagues -->
                    <h2 class="content-heading">
                        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
                        <i class="si si-cup mr-5"></i> Top Menus
                    </h2>
                    <div class="row items-push">
                        <div class="col-md-6 col-xl-3">
                            <div class="block block-rounded text-center">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar" src="assets/img/avatars/avatar8.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600 mb-5">Amanda Powell</div>
                                    <div class="font-size-sm text-muted">Product Designer</div>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                        <i class="fa fa-plus mr-5"></i>Add
                                    </a>
                                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-user-circle mr-5"></i>Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="block block-rounded text-center">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600 mb-5">Albert Ray</div>
                                    <div class="font-size-sm text-muted">Senior Developer</div>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                        <i class="fa fa-plus mr-5"></i>Add
                                    </a>
                                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-user-circle mr-5"></i>Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="block block-rounded text-center">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar" src="assets/img/avatars/avatar12.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600 mb-5">Justin Hunt</div>
                                    <div class="font-size-sm text-muted">Junior Designer</div>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                        <i class="fa fa-plus mr-5"></i>Add
                                    </a>
                                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-user-circle mr-5"></i>Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="block block-rounded text-center">
                                <div class="block-content block-content-full">
                                    <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="font-w600 mb-5">Carol Ray</div>
                                    <div class="font-size-sm text-muted">Marketing</div>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                        <i class="fa fa-plus mr-5"></i>Add
                                    </a>
                                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                                        <i class="fa fa-user-circle mr-5"></i>Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Colleagues -->
                </div>
                <!-- END Main Content -->
                <!-- END Page Content -->
            <!-- END Main Container -->

@endsection