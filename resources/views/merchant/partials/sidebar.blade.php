<nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="{{url('/merchant/home')}}">
                                        <i class="si si-fire text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">{{$page->name}}</span><span class="font-size-xl text-primary"></span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                            <i class="si si-drop"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark" href="{{ url('/merchant/logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="si si-logout"></i>
                                        </a>
                                        <form id="logout-form"
                                            action="{{ url('/merchant/logout') }}"
                                            method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                    <a href="{{url('/merchant/home')}}"><i class="fa fa-fw fa-line-chart"></i><span class="sidebar-mini-hide">Dashboards</span></a>
                                    <!-- <ul>
                                        <li>
                                            <a href="be_pages_dashboard.html">Dashboard 1</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_dashboard2.html">Dashboard 2</a>
                                        </li>
                                        <li>
                                            <a class="active" href="be_pages_dashboard3.html">Dashboard 3</a>
                                        </li>
                                        <li>
                                            <a href="be_pages_dashboard4.html">Dashboard 4</a>
                                        </li>
                                    </ul> -->
                               
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Navigation</span></li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-home"></i><span class="sidebar-mini-hide">Restaurant</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-edit"></i><span class="sidebar-mini-hide">Order</span></a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-fw fa-coffee"></i><span class="sidebar-mini-hide">Menu</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/merchant/category')}}">Category</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{url('/merchant/menu')}}">Menu</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                 
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->