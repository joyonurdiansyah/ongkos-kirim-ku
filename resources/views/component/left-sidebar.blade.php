<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home-page') }}">
        <div class="sidebar-brand-icon">
            <img src="/template/img/joy.png" width="30px" class="mt-2 mb-2" alt="Logo Joyo">
        </div>
        <div class="sidebar-brand-text mx-3">JOYO.TECH <sup></sup></div>
    </a>
    

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home-page') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/cek-ongkir') }}">
                    <i class="fas fa-truck mr-2"></i>
                    <span>Tracking Barang</span>
                </a>
                <a class="collapse-item" href="{{url('/form-request-pickup')}}">
                    <i class="fas fa-box mr-2"></i>
                    <span>Request Pickup</span>
                </a>
                <a class="collapse-item" href="forgot-password.html">
                    <i class="fas fa-print mr-2"></i> 
                    <span>Cetak Resi</span>
                </a>
            </div>
        </div>
    </li>
    
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>