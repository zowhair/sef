<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-text mx-3">
            <img src="{{asset('/images/sef_logo.png')}}" width="180" height="50">

        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <!-- Nav Item - Tables -->
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{ route('tenders')}}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Tender</span></a>--}}
{{--    </li>--}}


</ul>
<!-- End of Sidebar -->
