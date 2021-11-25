<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
    <div class="sidebar-brand-icon">
      <img src="/img/favicon2.png" alt="logo" width="50" class="rounded-circle">
    </div>
    <div class="sidebar-brand-text mx-2">MP-Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('admin') ? 'active' : ''}}">
    <a class="nav-link" href="/admin">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">DATA MASTER</div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item {{ Request::is('admin/*') ? 'active' : ''}}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-table"></i>
      <span>Pulsa</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Tabels Data:</h6>
        <a class="collapse-item" href="/admin/pulsa/provider">Providers</a>
        <a class="collapse-item" href="/admin/pulsa/price">Prices</a>
        <a class="collapse-item" href="#">Transaction</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-clipboard"></i>
      <span>PLN</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Tabels Data:</h6>
        <a class="collapse-item" href="#">Test</a>
        <a class="collapse-item" href="#">Test</a>
        <a class="collapse-item" href="#">Test</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider" />

  <!-- Heading -->
  <div class="sidebar-heading">Addons</div>

  <!-- Nav Item - Blank Page -->
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-folder"></i>
      <span>Blank Page</span></a
    >
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-folder"></i>
      <span>Test</span></a
    >
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>