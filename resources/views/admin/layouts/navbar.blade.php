<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('admin/dashboard')}}"><img style="max-height:100%;" src="{{asset('media/logo/'.$setting['footer_logo'])}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/admin/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/admin/foodmenu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-silverware"></i>
              </span>
              <span class="menu-title">Foods</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/admin/chefs')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Chefs</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/admin/reservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Reservation</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/admin/orders')}}">
              <span class="menu-icon">
                <i class="mdi mdi-truck-delivery"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-tune-vertical"></i>
              </span>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/logo')}}">Site Logo</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/slider')}}">Slider</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('admin/footerinfo')}}">Footer</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>