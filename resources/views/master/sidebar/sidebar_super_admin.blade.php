<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center mb-0" href="#">


        <img src="/logo_app/{{ App\Models\Setting::first()->logo_app }}" width="70px" alt="logo">

        <div class="sidebar-brand-text mx-3">
            <h5>
                {{ App\Models\Setting::first()->nama_app }}
            </h5>
        </div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-2">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ set_active(['super_admin.index']) }}">
        <a class="nav-link" href="{{ route('super_admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Super Admin
    </div>
    <li class="nav-item {{ set_active(['setting_app.index']) }}">
        <a class="nav-link" href="{{ route('setting_app.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting APP</span></a>
    </li>
    <li class="nav-item {{ set_active(['user_app.index']) }}">
        <a class="nav-link" href="{{ route('user_app.index') }}">
            <i class="fas fa-users-cog"></i>
            <span>User Management</span></a>
    </li>
    <li class="nav-item {{ set_active(['kepala_sekolah.index']) }}">
        <a class="nav-link" href="{{ route('kepala_sekolah.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Kepala Sekolah</span></a>
    </li>
    <li class="nav-item {{ set_active(['kelas.index']) }}">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Kelas</span></a>
    </li>
    <li class="nav-item {{ set_active(['guru.index', 'guru.create']) }}">
        <a class="nav-link" href="{{ route('guru.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Pegawai</span></a>
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
