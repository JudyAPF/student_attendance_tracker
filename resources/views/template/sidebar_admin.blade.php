<ul class="navbar-nav sidebar sidebar-light accordion " id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center bg-gradient-primary  justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logo/psu_logo.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">STA</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.create_class') }}">
            <i class="fas fa-chalkboard"></i>
            <span>Create Class</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.create_block') }}">
            <i class="fas fa-code-branch"></i>
            <span>Create Block/Section</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.create_instructor') }}">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Create Instructor</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.create_students') }}">
            <i class="fas fa-user-graduate"></i>
            <span>Create Students</span>
        </a>
    </li>
    <hr class="sidebar-divider">

</ul>
