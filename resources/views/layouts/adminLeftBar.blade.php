  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admin_inc/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::guard('admin')->user()->firtname}} {{Auth::guard('admin')->user()->lastname}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="/admin/dashboard">
            <i class="fa fa-dashboard text-blue"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o text-green"></i>
            <span>Services</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> All Services</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Suspended</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Expired</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Pending</a></li>
          </ul>
        </li>

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-users text-orange"></i>
                  <span>Users</span>
                  <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="/admin/users"><i class="fa fa-circle-o"></i> All Users</a></li>
                  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Suspended</a></li>
              </ul>
          </li>

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-users text-orange"></i>
                  <span>Clients</span>
                  <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="/admin/users"><i class="fa fa-circle-o"></i> All Users</a></li>
                  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Suspended</a></li>
              </ul>
          </li>

        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope text-purple"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>

        <li class="header">LABELS</li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-sliders text-yellow"></i>
                  <span>Types</span>
                  <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> All Types</a></li>
                  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> New Type</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-server text-red"></i>
                  <span>Categories</span>
                  <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> All Categories</a></li>
                  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> New Category</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-reorder text-aqua"></i>
                  <span>Sub-Categories</span>
                  <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> All Sub-Categories</a></li>
                  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> New Sub-Category</a></li>
              </ul>
          </li>
        <li><a href="#"><i class="fa fa-server text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-sliders text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="/"><i class="fa fa-home text-aqua"></i> <span>Home Page</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>