 
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <div class="d-flex p-2 align-items-center ">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0 mb-0" id="sidebarToggle"></button>
        </div>
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/dashboard')}}">
            <div class="sidebar-brand-text">Viggie Vibe</div>
        </a>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/kategoriproduk">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kategori</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/produk">
            <i class="fas fa-fw fa-table"></i>
            <span>Produk</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="/admin/pesanan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pesanan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>Viggie Vibe</strong> Pelayanan & Produk Terbaik Yang Disediakan.</p>
        <a class="btn btn-success btn-sm" href="{{url('/')}}">Home</a>
    </div>

</ul>
<!-- End of Sidebar -->
