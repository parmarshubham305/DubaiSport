 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->guard('admin')->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="@if(Request::segment(2) == '') active @endif">
          <a href="{{ route('admin.dashboard.index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="@if(Request::segment(2) == 'category-groups') active @endif treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Category Groups</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="@if(Request::segment(2) == 'category-groups' && Request::segment(3) == '') active @endif"><a href="{{ route('admin.category-groups.index') }}"><i class="fa fa-circle-o"></i> List </a></li>
            <li class="@if(Request::segment(2) == 'category-groups' && Request::segment(3) == 'create') active @endif"><a href="{{ route('admin.category-groups.create') }}"><i class="fa fa-circle-o"></i> Create </a></li>
          </ul>
        </li>
        <li class="@if(Request::segment(2) == 'categories') active @endif treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="@if(Request::segment(2) == 'categories' && Request::segment(3) == '') active @endif"><a href="{{ route('admin.categories.index') }}"><i class="fa fa-circle-o"></i> List </a></li>
            <li class="@if(Request::segment(2) == 'categories' && Request::segment(3) == 'create') active @endif"><a href="{{ route('admin.categories.create') }}"><i class="fa fa-circle-o"></i> Create </a></li>
          </ul>
        </li>
        <li class="@if(Request::segment(2) == 'master-options') active @endif treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Master Option</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="@if(Request::segment(2) == 'master-options' && Request::segment(3) == '') active @endif"><a href="{{ route('admin.master-options.index') }}"><i class="fa fa-circle-o"></i> List </a></li>
            <li class="@if(Request::segment(2) == 'master-options' && Request::segment(3) == 'create') active @endif"><a href="{{ route('admin.master-options.create') }}"><i class="fa fa-circle-o"></i> Create </a></li>
          </ul>
        </li>
        <li class="@if(Request::segment(2) == 'products') active @endif treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li class="@if(Request::segment(2) == 'products' && Request::segment(3) == '') active @endif"><a href="{{ route('admin.products.index') }}"><i class="fa fa-circle-o"></i> List </a></li>
            <li class="@if(Request::segment(2) == 'products' && Request::segment(3) == 'create') active @endif"><a href="{{ route('admin.products.create') }}"><i class="fa fa-circle-o"></i> Create </a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>