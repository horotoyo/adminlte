 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($thisPage == "Dashboard") echo "class='active'"; ?>>
          <a href="http://localhost/adminlte/admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?php if($thisPage == "Kategori") echo "class='active'"; ?>>
          <a href="http://localhost/adminlte/admin/kategori">
            <i class="fa fa-pie-chart"></i>
            <span>Kategori</span>
          </a>
        </li>
        <li <?php if($thisPage == "Artikel") echo "class='active'"; ?>>
          <a href="http://localhost/adminlte/admin/artikel">
            <i class="fa fa-book"></i>
            <span>Artikel</span>
          </a>
        </li>
      </ul>