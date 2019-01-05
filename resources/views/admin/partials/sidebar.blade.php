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
          <li><a href="{{url('/admin/home')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
          <li><a href="{{url('/admin/merchants')}}"><i class="fa fa-user"></i> <span>Merchant</span></a></li>
          <li class="treeview">
              <a href="#"><i class="fa fa-map-marker"></i> <span>Type Restaurant</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/admin/types/create')}}">New Type</a></li>
                <li><a href="{{url('/admin/types')}}">Types</a></li>
              </ul>
        </li>
          <li class="treeview">
                <a href="#"><i class="fa fa-map-marker"></i> <span>Group Restaurant</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{url('/admin/groups/create')}}">New Group</a></li>
                  <li><a href="{{url('/admin/groups')}}">Groups</a></li>
                </ul>
          </li>
          <li><a href="{{url('/admin/categories')}}"><i class="fa fa-list"></i> <span>Category</span></a></li>
          <li><a href="{{url('/admin/menu')}}"><i class="fa fa-coffee"></i> <span>Menu</span></a></li>
          <li><a href="{{url('/admin/customer')}}"><i class="fa fa-group"></i> <span>Customer</span></a></li>
          <li><a href="{{url('/admin/notification')}}"><i class="fa fa-bell"></i> <span>Notification</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
</aside>