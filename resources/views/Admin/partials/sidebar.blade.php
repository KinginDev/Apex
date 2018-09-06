  <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="/admin/dashboard" class="">
          <img src="{{asset('img/logo/57x57.png')}}" alt="apex triangle logo" width="">
        </a>
        <a href="/admin/dashboard" class="simple-text logo-normal">
          Admin Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ active('admin.dashboard') }}">
            <a href="/admin/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{route('blog.index')}}" class="{{ active('blog.index') }}">
              <i class="now-ui-icons education_atom"></i>
              <p>Blog</p>
            </a>
          </li>
          <li>
            <a href="{{route('category.index')}}" class="{{ active('category.index') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Categories</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Projects</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons users_single-02"></i>
              <p>Administration</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>API's</p>
            </a>
          </li>

        </ul>
      </div>
    </div>