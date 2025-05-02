<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Wellness Hub</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Profile -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-user"></i>
                <span>Profile</span>
            </a>
        </li>

        <!-- Logout -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    </ul>
</div>
