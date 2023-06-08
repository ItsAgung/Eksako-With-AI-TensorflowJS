<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <div class="navbar nav_title col-sm-8" style="border: 0;">
            <a href="index.php" class="site_title"><img class="img-logo" src="<?php echo base_url();?>assets/images/logoeksakoplg.png" width="102px"
                height="auto"> </a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url();?>assets/images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?= $this->session->userdata('nama') ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url('layanan/dashboard');?>"><i class="fa fa-home"></i> Home <span></span></a>
                </li>
                <li><a> <i class="fa-solid fa-gauge-high fa-xl mr-2"></i>Info <span
                      class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('layanan/info');?>">Tentang</a></li>
                    <li><a href="<?php echo base_url('layanan/visimisi');?>">Profile & VISI MISI</a></li>
                    <li><a href="<?php echo base_url('layanan/struktur');?>">Struktur Kepengurusan</a></li>
                  </ul>
                </li>
                <li><a><i class="fa-solid fa-book fa-xl mr-2"></i> Layanan Surat<span
                      class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('layanan/daftarsurat');?>">Buat Surat</a></li>
                    <li><a href="<?php echo base_url('layanan/syaratsurat');?>" >Daftar Persyaratan</a></li>
                    <li><a href="<?php echo base_url('layanan/letterformsktm');?>" >Form</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo base_url('layanan/arsip');?>"><i class="fa-solid fa-box-archive fa-xl mr-2"></i> Arsip</a>
                </li>



            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= site_url('login/logout') ?>">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>