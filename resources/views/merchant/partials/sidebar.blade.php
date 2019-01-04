<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
          <!-- search form (Optional) -->
          {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
            </div>
          </form> --}}
          <!-- /.search form -->

        <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
          <li class="header">NAVIGATION</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="{{url('/merchant/home')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
          @if(Auth::user()->restaurants->count()==0)
          <li class="active"><a href="{{url('/merchant/restaurant/create')}}"><i class="fa fa-map-marker"></i> <span>Create Restaurant</span></a></li>
          @else
          <li class="active"><a href="{{url('/merchant/restaurant/' . Auth::user()->restaurants[0]->id . '/edit')}}"><i class="fa fa-map-marker"></i> <span>Restaurant</span></a></li>
          @endif
          <li class="treeview">
            <a href="#"><i class="fa fa-list"></i> <span>Category</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('/merchant/category/create')}}">New Category</a></li>
              <li><a href="{{url('/merchant/category')}}">Categories</a></li>
            </ul>
          </li>
          <li class="treeview">
              <a href="#"><i class="fa fa-coffee"></i> <span>Menu</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/merchant/menu/create')}}">New Menu</a></li>
                <li><a href="{{url('/merchant/menu')}}">Menus</a></li>
              </ul>
            </li>
          <li><a href="{{url('/merchant/order')}}"><i class="fa fa-cart-plus"></i> <span>Order</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
</aside>