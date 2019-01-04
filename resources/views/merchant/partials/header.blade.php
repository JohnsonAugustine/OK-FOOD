<!-- Main Header -->
<header class="main-header">

        <!-- Logo -->
        <a href="{{url('/merchant/home')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>O</b>K</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>OK</b>FOOD</span>
        </a>
    
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
    
              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i data-count="0" class="fa fa-bell-o"></i>
                  <span class="label label-danger"><span class="notif-count">0</span></span>
                </a>
                <ul class="dropdown-menu">
                  {{-- <li>You have <span class="notif-count">0</span> notifications</li> --}}
                  
                </ul>
              </li>
             
              <!-- User Account Menu -->
          <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">    
                    <p>
                      {{Auth::user()->name}} - 
                      @if(Auth::user()->restaurants->count()>0)
                      <span class="resto-name" id="resto-name">{{Auth::user()->restaurants[0]->name}}</span>
                      <input name="resto-name" id="resto-name" hidden value="{{Auth::user()->restaurants[0]->name}}"></input>
                      {{-- <small>Member since Nov. 2012</small> --}}
                      @else
                     
                      @endif
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    
                    <!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('/merchant/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                          <form id="logout-form"
                                            action="{{ url('/merchant/logout') }}"
                                            method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                          </form>
                    </div>
                  </li>
                </ul>
              </li>     
            </ul>
          </div>
        </nav>
      </header>