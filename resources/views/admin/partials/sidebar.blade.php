<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('logopanjang.png') }}" alt="" width="200">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">admin</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item {{ request()->is('admin') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>

        <li class="menu-item {{ request()->is('admin/kategori*') ? 'active' : '' }}">
            <a href="{{ route('admin.kategori.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Kategori</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/pelatihan*') ? 'active' : '' }}">
            <a href="{{ route('admin.pelatihan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Pelatihan</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/blog*') ? 'active' : '' }}">
            <a href="{{ route('admin.blog.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Blog</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/peserta*') ? 'active' : '' }}">
            <a href="{{ route('admin.peserta.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Peserta</div>
            </a>
        </li>
    </ul>
</aside>
