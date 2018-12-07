<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('storage/'.Auth::user()->user_img) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{ url('admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/movie') }}">
            <i class="fa fa-film"></i> <span>Movies</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/users') }}">
            <i class="fa fa-users"></i> <span>Users</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/genres') }}">
            <i class="fa fa-th"></i> <span>genres</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/blog') }}">
            <i class="fa  fa-pencil-square-o"></i> <span>Blog</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/reports') }}">
            <i class="fa fa-bug"></i> <span>Reports</span>
          </a>
        </li>
        <li>
          <a href="{{ url('admin/pages') }}">
            <i class="fa fa-newspaper-o"></i> <span>Pages</span>
          </a>
        </li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-line-chart"></i> <span>Stats</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/stats') }}"><i class="fa fa-circle-o"></i>Stats</a></li>
            <li><a href="{{ url('admin/stats/all') }}"><i class="fa fa-circle-o"></i>All</a></li>
            <li><a href="{{ url('admin/stats/browsers') }}"><i class="fa fa-circle-o"></i>Browsers</a></li>
            <li><a href="{{ url('admin/stats/bots') }}"><i class="fa fa-circle-o"></i>Bots</a></li>
            <li><a href="{{ url('admin/stats/countries') }}"><i class="fa fa-circle-o"></i>Countries</a></li>
            <li><a href="{{ url('admin/stats/languages') }}"><i class="fa fa-circle-o"></i>Languages</a></li>
            <li><a href="{{ url('admin/stats/login-attempts') }}"><i class="fa fa-circle-o"></i>Login Attempts</a></li>
            <li><a href="{{ url('admin/stats/os') }}"><i class="fa fa-circle-o"></i>OS</a></li>
            <li><a href="{{ url('admin/stats/unique') }}"><i class="fa fa-circle-o"></i>Unique</a></li>
            <li><a href="{{ url('admin/stats/urls') }}"><i class="fa fa-circle-o"></i>Urls</a></li>
            <li><a href="{{ url('admin/stats/users') }}"><i class="fa fa-circle-o"></i>Users</a></li>
            <li><a href="{{ url('admin/stats/visits') }}"><i class="fa fa-circle-o"></i>Visits</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>