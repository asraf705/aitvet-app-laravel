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

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Module</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('depertment.index')}}">Depertment Category</a></li>
                    <li><a class="nav-link" href="#">Admission Category</a></li>
                    <li><a class="nav-link" href="#">Teacher's Category</a></li>
                </ul>
            </li>

            {{-- <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="box"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="product/manage-product.html">Manage Product</a></li>
                </ul>
            </li> --}}

            <li class="dropdown">
                <a href="#" class="nav-link"><i data-feather="box"></i><span>Teacher</span></a>
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
                    <li><a class="nav-link" href="#">Banner Image</a></li>
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
                    <li><a class="nav-link" href="#">Manage Admin</a></li>
                    <li><a class="nav-link" href="#">Manage Subadmin</a></li>
                    <li><a class="nav-link" href="#">Manage Student</a></li>
                </ul>
            </li>

            <li class="menu-header">Admission</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Admission List</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Student Admission</a></li>
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
