<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo 'http://localhost/adminlte/gambar/user-img/'.$_SESSION['photo']?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['name']?></p>
          <a href="#">
            <?php
            $cek    = $_SESSION['user'];

            if ($cek == 1) {
              echo "<i class='fa fa-circle text-primary'></i>";
            } else {
              echo "<i class='fa fa-circle text-success'></i>";
            }
            ?>

            <?= $_SESSION['tipe'] ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
    <!-- /.sidebar -->
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
        <li <?php if($thisPage == "User") echo "class='active'"; ?>>
          <a href="http://localhost/adminlte/admin/user">
            <i class="fa fa-user"></i>
            <span>User</span>
          </a>
        </li>
      </ul>
  </section>