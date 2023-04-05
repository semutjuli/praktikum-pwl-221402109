<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center {{ request()->is('/index' || '/') ? 'active' : '' }}" href="/index">
        <div class="sidebar-brand-icon rotate-n-15 ">
            <i class="fas fa-user-graduate"></i>
        </div>
        <div class="sidebar-brand-text mx-3">221402109{{-- <sup>2</sup>--}}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('index/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-address-card"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Postingan -->
    <li class="nav-item {{ request()->is('index/postingan') ? 'active' : '' }}">
        <a class="nav-link" href="postingan">
            <i class="fas fa-images"></i>
            <span>Semua Postingan</span></a>
    </li>

    <!-- Nav Item - Arsip -->
    <li class="nav-item {{ request()->is('index/arsip') ? 'active' : '' }}">
        <a class="nav-link" href="arsip">
            <i class="fas fa-archive"></i>
            <span>Arsip</span></a>
    </li>

    <!-- Nav Item - Pengaturan -->
    <li class="nav-item {{ request()->is('index/pengaturan') ? 'active' : '' }}">
        <a class="nav-link" href="pengaturan">
            <i class="fas fa-cog"></i>
            <span>Pengaturan</span></a>
    </li>
    <!-- Nav Item - Logout -->
    <li class="nav-item {{ request()->is('index/logout') ? 'active' : '' }}">
        <a class="nav-link" href="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
{{-- 
    <!-- Divider -->
    <hr class="sidebar-divider"> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

@yield('sidebar')
