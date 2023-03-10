<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SEKOLAH <sup>APP</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>


    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Kepela Sekolah</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Guru</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Murid</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
