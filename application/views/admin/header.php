<!DOCTYPE  html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma An-Nur Nusa</title>
    <link href="<?php echo base_url()?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/build/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col"  >
          <div class="left_col scroll-view" style="background: #11b192 ">
            <div class="navbar nav_title" style="border: 0; background: #ededed">
              <a href="index.html" class="site_title"><img style="width: 35px" src="<?php echo base_url()?>assets/admin/build/images/logo.png"></i> <span style="color: #11b192">Ma An-Nur Nusa</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>assets/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li ><a href="<?php echo base_url()."index.php/admin/Beranda"?>"><i class="fa fa-home"></i>Dashboard</span></a>
                  </li>
                  <li ><a><i class="fa fa-edit"></i> Sekolah<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."index.php/admin/c_sekolah/datasiswa"?>">Laporan Data Siswa</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_sekolah/dataalumni'); ?>">Laporan Data Alumni</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_sekolah/datapendidik'); ?>">Laporan Data Tenaga Pendidik</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_sekolah/datastaff'); ?>">Laporan Data Staff</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_sekolah/datasiswabaru'); ?>">Laporan Data Siswa Baru</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Master data<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=base_url('index.php/admin/c_master/datakelas'); ?>">Data Kelas</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_master/datamapel'); ?>">Data Mata Pelajaran</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_master/datainventaris'); ?>">Data Inventaris Barang</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_master/datastaff'); ?>">Data Staff</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_master/datauser'); ?>">Data User</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_master/dataekskul'); ?>">Data Ekstrakulikuler</a></li>
                      <li><a href="<?=base_url('index.php/admin/c_master/datacalon'); ?>">Data Calon Siswa Baru</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Berita dan Info<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."index.php/admin/Berita"?>">Data Berita</a></li>
                      <li><a href="<?php echo base_url()."index.php/admin/kategori"?>">Data Kategori</a></li>
                      <li><a href="<?php echo base_url()."index.php/admin/galeri"?>">Galeri Foto</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Pengaturan<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."index.php/admin/Pengaturan"?>">Modul</a></li>
                      <li><a href="<?php echo base_url()."index.php/admin/Pengaturan/Pengaturan_menu"?>">Menu</a></li>
                      <li><a href="<?php echo base_url()."index.php/admin/Pengaturan/Pengaturan_submenu"?>">Sub Menu</a></li>
                      <li><a href="<?php echo base_url()."index.php/admin/Pengaturan/Pengaturan_usergroup"?>">User Group</a></li>
                      <li><a href="#">Login Page</a></li>
                      <li><a href="#">Hak Akses</a></li>
                    </ul>
                  </li>
                </ul>  
              </div>
            </div>
            <div class="sidebar-footer hidden-small" style="background: #11b796 ! important">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>assets/admin/production/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>assets/admin/production/images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>assets/admin/production/images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>assets/admin/production/images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url()?>assets/admin/production/images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
