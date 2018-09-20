<div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url(); ?>administrator" class="site_title"><i class="fa fa-shopping-cart"></i> <span>SportWay</span></a>
          </div>
          <div class="clearfix"></div>
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <ul class="nav side-menu">
                <li>
                  <a href="<?= base_url(); ?>administrator"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                  <a href="<?= base_url(); ?>item"><i class="fa fa-cubes"></i> Produk</a>
                </li>
                <li>
                  <a href="<?= base_url(); ?>transadm"><i class="fa fa-exchange"></i> Transaksi</a>
                </li>
                <li>
                  <a href="<?= base_url(); ?>user"><i class="fa fa-users"></i> Manajemen User</a>
                </li>
                <li>
                  <a href="<?= base_url(); ?>transadm/report"><i class="fa fa-book"></i> Laporan</a>
                </li>  
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user"></i> Administrator
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="<?= base_url(); ?>administrator/update_profil"> Profile</a>
                  </li>
                  <li><a href="<?= base_url(); ?>loginadm/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->
