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
                                    <a class="link-effect font-w700" href="{{url('/admin/home')}}">
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
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="{{ asset('images/'.Auth::user()->photo) }}" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="#">
                                    <img class="img-avatar" src="{{ asset('images/'.Auth::user()->photo) }}" alt="">
                                </a>
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
                                        <a class="link-effect text-dual-primary-dark" href="{{ url('/admin/logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="si si-logout"></i>
                                        </a>
                                        <form id="logout-form"
                                            action="{{ url('/admin/logout') }}"
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
                                    <a href="{{url('/admin/home')}}"><i class="fa fa-fw fa-line-chart"></i><span class="sidebar-mini-hide">Dashboards</span></a>
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
                                <li>
                                    <a href="{{url('/admin/promotion')}}"><i class="fa fa-fw fa-trophy"></i><span class="sidebar-mini-hide">Promotion</span></a>
                                   
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Order, Restaurant &amp; Menu</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-fw fa-coffee"></i><span class="sidebar-mini-hide">Menu</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/admin/category')}}">Category</a>
                                        </li>
                                        <!-- <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Menu</a>
                                            <ul>
                                                <li>
                                                    <a href="be_blocks_widgets_users.html">Users</a>
                                                </li>
                                                <li>
                                                    <a href="be_blocks_widgets_stats.html">Stats</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <li>
                                            <a href="{{url('/admin/menu')}}">Menu</a>
                                        </li>
                                        <!-- <li>
                                            <a href="be_blocks_draggable.html">Draggable</a>
                                        </li>
                                        <li>
                                            <a href="be_blocks_api.html">API</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-fw fa-home"></i><span class="sidebar-mini-hide">Restaurant</span></a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/admin/type')}}">Type or Category</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/admin/restaurant')}}">Restaurant</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-fw fa-wheelchair-alt"></i><span class="sidebar-mini-hide">Tables</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_tables_styles.html">Styles</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_responsive.html">Responsive</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_helpers.html">Helpers</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="be_tables_datatables.html">DataTables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-fw fa-edit"></i><span class="sidebar-mini-hide">Order</span></a>
                                    <ul>
                                        <li>
                                            <a href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_elements_material.html">Material Elements</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_css_inputs.html">CSS Inputs</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_plugins.html">Plugins</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_editors.html">Editors</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_validation.html">Validation</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_wizard.html">Wizard</a>
                                        </li>
                                        <li>
                                            <a href="be_forms_premade.html">Pre-made</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Customer</span></li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                                    <ul>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_default.html">Default</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_flipped.html">Flipped</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                            <ul>
                                                <li>
                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                                    <ul>
                                                        <li>
                                                            <a href="be_layout_header_modern.html">Modern</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_classic.html">Classic</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_glass.html">Glass</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                                    <ul>
                                                        <li>
                                                            <a href="be_layout_header_fixed_modern.html">Modern</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_classic.html">Classic</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_glass.html">Glass</a>
                                                        </li>
                                                        <li>
                                                            <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_sidebar_mini.html">Mini</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_side_overlay_visible.html">Visible</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_content_boxed.html">Boxed</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_content_narrow.html">Narrow</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_content_full_width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                            <ul>
                                                <li>
                                                    <a href="be_layout_hero_color.html">Color</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_hero_image.html">Image</a>
                                                </li>
                                                <li>
                                                    <a href="be_layout_hero_video.html">Video</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="be_layout_api.html">API</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Settings</span></li>
                                <li>
                                    <a href="{{url('/admin/setting/1/edit')}}"><i class="fa fa-fw fa-cog"></i><span class="sidebar-mini-hide">General</span></a>
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