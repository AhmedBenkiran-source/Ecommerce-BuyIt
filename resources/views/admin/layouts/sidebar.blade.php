  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('storage/'. Auth::user()->ImageAdmin) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/admin/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('system-management/product') }}"><i class="fa fa-link"></i> <span>Product Management</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/category') }}">Category</a></li>
            <li><a href="{{ url('system-management/brand') }}">Brand</a></li>
            <li><a href="{{ url('system-management/provider') }}">Provider</a></li>
            <li><a href="{{ url('system-management/country') }}">Country</a></li>
            <li><a href="{{ url('system-management/city') }}">City</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-edit"></i> <span>User management</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('user-management/admin') }}">Administrator</a></li>
              <li><a href="{{ url('user-management/customer') }}">Customer</a></li>
            </ul>      
        </li>
          
          <li>
           <a href="{{ url('system-management/order') }}">
            <i class="fa fa-book"></i> <span>Orders</span>
          
            </a>
         </li>
         <li>
              <a href="{{ url('system-management/bills') }}" }}>
                   <i class="fa fa-book"></i> <span>Bills</span>    
               </a>
         </li>
         <li><a href="{{ url('system-management/Impression') }}"><i class="fa fa-book"></i> <span>Impression</span></a></li>

        <li>
          <a href="{{ url('system-management/mailbox') }}">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
          </a>
        </li>

     </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>