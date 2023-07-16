<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ request()->routeIs('admin.index') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.index')}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Page Settings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('basic-page.index') ? 'active' : '' }}"><a class="nav-link" href="{{route('basic-page.index')}}"><i class="fas fa-angle-right"></i>For Basic Plan</a></li>
                </ul>
            </li>
            <li class="{{ request()->routeIs('admin.create') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.create')}}" data-bs-toggle="tooltip" data-bs-placement="right" title="Why Choose Items"><i class="fas fa-hand-point-right"></i> <span>Contact User</span></a></li>
    </aside>
</div>
