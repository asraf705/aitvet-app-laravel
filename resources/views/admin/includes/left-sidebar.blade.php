<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}"> <img alt="image" src="{{ asset('/') }}admin/assets/img/logo.png"
                    class="header-logo" /> <span class="logo-name"></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('admin.home') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">All Category</li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('depertment-category.index')}}">Depertment Category</a></li>
                    <li><a class="nav-link" href="{{route('admission-category.index')}}">Admission Category</a></li>
                    <li><a class="nav-link" href="{{route('teacher-category.index')}}">Teacher's Post</a></li>
                </ul>
            </li>

            <li class="menu-header">Academic</li>

            <li class="dropdown">
                <a href="{{route('teachers-info.index')}}" class="nav-link"><i data-feather="box"></i><span>Teacher's Informetion</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="box"></i><span>Notice
                        Board</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Manage Notice</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="box"></i><span>Gallery</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('banner-image.index') }}">Banner Image</a></li>
                    <li><a class="nav-link" href="#">Gallery Image</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link"><i data-feather="box"></i><span>Testimonial</span></a>
            </li>


            <li class="menu-header">Account</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="copy"></i><span>Account</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.account.admin') }}">Admin Account</a></li>
                    <li><a class="nav-link" href="{{ route('admin.account.sub-admin') }}">Subadmin Account</a></li>
                    <li><a class="nav-link" href="{{ route('admin.account.student') }}">Student Account</a></li>
                </ul>
            </li>

            <li class="menu-header">Admission</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Admission Info</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Admission Request</a></li>
                    <li><a class="nav-link" href="#">Confirm Admission</a></li>
                    <li><a class="nav-link" href="#">Admission Info Print</a></li>
                </ul>
            </li>

            <li class="menu-header">Payment Details</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="box"></i><span>Payment</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Manage Payment</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
