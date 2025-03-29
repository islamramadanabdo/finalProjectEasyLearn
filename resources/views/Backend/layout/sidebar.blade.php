<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">

        <li><a class="nav-link" href="{{route('admin.dashboard')}}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

        <li class="menu-header">Manage Website</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Categories</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('categories.index')}}">List All Categories</a></li>
            <li><a class="nav-link" href="{{route('categories.create')}}">Add Category</a></li>
          </ul>
        </li>
    </aside>
  </div>
