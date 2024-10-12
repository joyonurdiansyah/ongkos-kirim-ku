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
                    <a class="collapse-item {{ Request::is('cek-ongkir') ? 'active' : '' }}" 
                    href="{{ url('/cek-ongkir') }}" 
                    style="{{ Request::is('cek-ongkir') ? 'background-color: #6f42c1; color: white;' : '' }}">
                        <i class="fas fa-truck mr-2" style="{{ Request::is('cek-ongkir') ? 'color: white;' : '' }}"></i>
                        <span>Tracking Barang</span>
                    </a>
                    <a class="collapse-item {{ Request::is('form-request-pickup') ? 'active' : '' }}" 
                    href="{{ url('/form-request-pickup') }}" 
                    style="{{ Request::is('form-request-pickup') ? 'background-color: #6f42c1; color: white;' : '' }}">
                        <i class="fas fa-box mr-2" style="{{ Request::is('form-request-pickup') ? 'color: white;' : '' }}"></i>
                        <span>Request Pickup</span>
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