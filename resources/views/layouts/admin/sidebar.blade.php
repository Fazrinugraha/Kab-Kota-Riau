<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img src="assets/templates/admin/img/logo.png" alt="" style="width: 100px; height: auto;">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">FAZRI</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <!-- Dashboard Menu -->
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home" style="color: #3F51B5;"></i>                    
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Kabupaten/Kota Menu -->
            <li class="{{ Route::is('admin.tb_kab_kota') || Route::is('admin.tb_kab_kota.create') || Route::is('admin.tb_kab_kota.edit') || Route::is('admin.tb_kab_kota.detail') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.tb_kab_kota.index') }}">
                    <i class="fas fa-map-marker-alt" style="color: #3F51B5;"></i>                    
                    <span>Kabupaten/Kota</span>
                </a>
            </li>
            <li class="{{ Route::is('admin.profile') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.profile') }}">
                    <i class="fas fa-user" style="color: #3F51B5;"></i>                    
                    <span>Profil Admin</span>
                </a>
            </li>
        </ul>
    </aside>
</div>