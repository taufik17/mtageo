<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="icon" type="image/png" href="<?php base_url() ?>assets/gambar/favicon.png">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<style type="text/css">
            #latarbelakang {
                background-image: url('http://localhost/mtageo/assets/dist/img/bacground.jpg');
                background-repeat: repeat;
            }
        </style>
<body id="latarbelakang" class="latarbelakang hold-transition skin-blue layout-boxed sidebar-mini" style="height: auto; min-height: 100%;">
<!-- Site wrapper -->
<div>
 &nbsp
</div>
<div class="wrapper">
 <div>
  &nbsp
 </div>
 <div class="container base">
  <div class="container">
      <div class="row ">
        <div class="col-md-1">
         <a href="<?php base_url() ?>">
           <img src="<?php base_url() ?>assets/dist/img/logo-itera-oke.png" width="70px" style="margin-bottom:10px; ">
         </a>
        </div>
        <div class="col-md-5">
          <h3>Sistem Informasi Tugas Akhir</h3>
          <h5>Teknik Geofisika</h5>
          <p><em>"Institut Teknologi Sumatera"</em></p>
        </div>
      </div>
  </div>
</div>
 <div>
  &nbsp
 </div>
</div>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- jika android / jika di kecilkan -->
      <span class="logo-mini">si<b>TA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">si<b>TA</b> Geofisika</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php base_url() ?>assets/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><i class="fa fa-sort-down"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php base_url() ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                <p>
                 <?php foreach ($data->result() as $nama ) {
                 ?> <?php echo $nama->Nama_mhs ;?>
                  <small><?php echo $nama->NIM ;?></small>
                  <?php }?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php base_url() ?>ProfilMhs" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php base_url() ?>BerandaMhs/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->
  <!-- Menu -->
  <?php $this->load->view($menu); ?>
  <!-- =============================================== -->
  <!-- / Menu -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $Welcome; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> <?php echo $judul; ?></a></li>
        <li><a href="#"><i class="fa fa-right"></i> <?php echo $sub_judul; ?></a></li>
      </ol>
    </section>
    <!-- disini konten -->
    <?php $this->load->view($konten); ?>
    <!-- /.konten -->
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Beta
    </div>
    <strong>Copyright &copy; 2019 <a href="<?php base_url() ?>">Tim Hore</a>.</strong> All rights
    reserved.
  </footer>
</div>
<div>
 &nbsp
</div>

<!-- jQuery 3 -->
<script src="<?php base_url() ?>assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php base_url() ?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php base_url() ?>assets/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php base_url() ?>assets/dist/js/demo.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php base_url() ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
$('#datepicker').datepicker({
  autoclose: true
})
</script>
</body>
</html>
