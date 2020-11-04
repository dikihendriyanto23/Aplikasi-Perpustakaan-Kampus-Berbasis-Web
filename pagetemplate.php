<?php
session_start();
include 'config/koneksi.php';
include 'cek_login.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpustakaan | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="pagetemplate.php" class="logo">
        <span class="logo-mini"><b>A</b>DM</span>
        <span class="logo-lg"><b>Admin</b> Perpustakaan</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <?php  
            $data=mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$_SESSION[username]'") or die(mysqli_error($koneksi));;  
            $baris=mysqli_fetch_array($data); ?>
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="assets/images.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $baris['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="assets/images.png" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $baris['nama']; ?>
                    <small>Admin Perpustakaan</small>
                  </p>
                </li>
      
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="assets/images.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $baris['nama']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        
        <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <li><a href="pagetemplate.php"><i class="glyphicon glyphicon-home"></i> <span>Beranda</span></a></li>
        </li>
        <li class="active treeview">
            <a href="#">
              <i class="glyphicon glyphicon-briefcase"></i> <span>Kelola Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pagetemplate.php?page=data_buku"><i class="glyphicon glyphicon-book"></i> <span>Data Buku</span></a></li>
              <li><a href="pagetemplate.php?page=tambah_buku"><i class="glyphicon glyphicon-book"></i> <span>Tambah Data Buku</span></a></li>
              <li><a href="pagetemplate.php?page=data_anggota"><i class="glyphicon glyphicon-user"></i> <span>Data Anggota</span></a></li>
              <li><a href="pagetemplate.php?page=tambah_anggota"><i class="glyphicon glyphicon-user"></i> <span>Tambah Anggota</span></a></li>
              <li><a href="pagetemplate.php?page=data_peminjaman"><i class="glyphicon glyphicon-tasks"></i> <span>Data Peminjaman</span></a></li>
              <li><a href="pagetemplate.php?page=data_pengembalian"><i class="glyphicon glyphicon-tasks"></i> <span>Data Pengembalian</span></a></li>
            </ul>
        </li>
        <li class="active treeview">
            <a href="#">
              <i class="glyphicon glyphicon-briefcase"></i> <span>Peminjaman</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pagetemplate.php?page=peminjamanbuku"><i class="glyphicon glyphicon-book"></i> <span>Peminjaman Buku</span></a></li>
            </ul>
        </li>
        <li class="active treeview">
            <a href="#">
              <i class="glyphicon glyphicon-briefcase"></i> <span>Kelola Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pagetemplate.php?page=laporan"><i class="glyphicon glyphicon-tasks"></i> <span>Laporan Pengembalian</span></a></li>
            </ul>
        </li>
        <li class="header">SETTING</li>
          <li class="treeview">
            <li><a href="pagetemplate.php?page=pengaturan"><i class="glyphicon glyphicon-cog"></i> <span>Pengaturan</span></a></li>
            <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> <span>Logout</span></a></li>
          </li>
        </ul>
      </section>
    </aside>

    <!-- Content -->
      <?php include "config/page.php"; ?>
    <!-- /Content -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> Beta 1.0.0
      </div>
      <strong>Copyright &copy; 2020 <a href="#">Aplikasi Perpustakaaan</a>.</strong> All rights
      reserved.
    </footer>
  </div>

  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/bower_components/raphael/raphael.min.js"></script>
  <script src="assets/bower_components/morris.js/morris.min.js"></script>
  <script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <script src="assets/bower_components/moment/min/moment.min.js"></script>
  <script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="assets/dist/js/adminlte.min.js"></script>
  <script src="assets/dist/js/pages/dashboard.js"></script>
  <script src="assets/dist/js/demo.js"></script>
  <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>
