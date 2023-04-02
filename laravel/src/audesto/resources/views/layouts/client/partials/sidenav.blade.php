<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="{{ route('client.dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Reservation</span><i
                class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('client.reservation') }}">
                    <i class="bi bi-circle"></i><span>Nouvelle</span>
                </a>
            </li>
        </ul>
    </li><!-- End Components Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('client.profile') }}">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('client.faq') }}">
            <i class="bi bi-question-circle"></i>
            <span>F.A.Q</span>
        </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('client.contact') }}">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
        </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('client.garage') }}">
            <i class="bi bi-card-list"></i>
            <span>Notre Collection</span>
        </a>
    </li><!-- End Garage Page Nav -->


</ul>

</aside><!-- End Sidebar-->
