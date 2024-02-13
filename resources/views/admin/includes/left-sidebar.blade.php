<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('admin.home')}}"> <img alt="image" src="{{asset('/')}}admin/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name"></span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="{{route('admin.home')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>

        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="#">Depertment Category</a></li>
            <li><a class="nav-link" href="#">Admission Category</a></li>
            <li><a class="nav-link" href="#">Teacher's Category</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="box"></i><span>Product</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="product/manage-product.html">Manage Product</a></li>
          </ul>
        </li>
        <li class="menu-header">Account</li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Account</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="account/manage-account.html">Manage Account</a></li>
          </ul>
        </li>

        <li class="menu-header">Oder</li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Oder List</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="oder/manage-oder.html">Manage Oder</a></li>
          </ul>
        </li>

        <li class="menu-header">Sell Details</li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="box"></i><span>Price</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="price/manage-price.html">Manage Price</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Sell</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="sell/manage-sell.html">Manage Sell</a></li>
            <li><a class="nav-link" href="sell/print-sell.html">Sell info Print</a></li>
          </ul>
        </li>

      </ul>
    </aside>
  </div>
