<ul class="navbar-nav sidebar sidebar-light accordion " id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center bg-gradient-primary  justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logo/psu_logo.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">STA</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('view_students') }}">
            <i class="fas fa-chalkboard"></i>
            <span>View Students</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('take_attendance') }}">
            <i class="fas fa-code-branch"></i>
            <span>Take Attendance</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('view_attendance') }}">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>View Class Attendance</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('view_attendance_form') }}">
            <i class="fas fa-user-graduate"></i>
            <span>View Student Attendance</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('attendance') }}">
            <i class="fa fa-calendar-alt"></i>
            <span>Today's Report (xls)</span>
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>
