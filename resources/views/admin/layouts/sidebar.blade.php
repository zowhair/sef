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
    <li class="nav-item">
        <a class="nav-link" href="/tenders">
            <i class="fas fa-fw fa-table"></i>
            <span>Tender</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/department">
            <i class="fas fa-fw fa-table"></i>
            <span>Department</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/alumnis">
            <i class="fas fa-fw fa-table"></i>
            <span>Alumni</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
           aria-expanded="true" aria-controls="collapseThree">
            <i class="fab fa-slideshare"></i>&nbsp;
            <span>Scholarship</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item"  href="/scholarships">Scholarship</a>

                    <a class="collapse-item"  href="/galleries">Gallary</a>

            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/news-update">
            <i class="fas fa-fw fa-table"></i>
            <span>News Updates</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/notifications">
            <i class="fas fa-fw fa-table"></i>
            <span>Notification</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/annual-report">
            <i class="fas fa-fw fa-table"></i>
            <span>Annual Report</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/newsletters">
            <i class="fas fa-fw fa-table"></i>
            <span>Newsletters</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/research-studies">
            <i class="fas fa-fw fa-table"></i>
            <span>Research Study</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/sujaag">
            <i class="fas fa-fw fa-table"></i>
            <span>Sujaag</span></a>
    </li>
    
    

</ul>
<!-- End of Sidebar -->
