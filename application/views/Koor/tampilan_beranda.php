<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/sanspro.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dropify/dropify.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">
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
         <a href="<?php echo base_url() ?>">
           <img src="<?php echo base_url() ?>assets/dist/img/logo-itera-oke.png" width="70px" style="margin-bottom:10px; ">
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
    <a href="<?php echo base_url() ?>" class="logo">
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
        <!-- <li>
         <?php foreach ($data->result() as $dt ) {
         ?>
         <a href="<?php echo base_url() ?>ProfilKoor"><i class="fa fa-user"></i>&nbsp <?php echo $dt->Nama ;?></a>
         <?php }?>
        </li> -->
        <li>
         <a href="<?php echo base_url() ?>BerandaKoor/logout"><i class="fa fa-sign-out"></i>&nbsp Logout</a>
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
    <strong>Copyright &copy; 2019 <a href="<?php echo base_url() ?>">Informatika</a>.</strong> All rights
    reserved.
  </footer>
</div>
<div>
 &nbsp
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/dropify/dropify.min.js"></script>
<script src="<?php echo base_url() ?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                default: 'Drag atau drop untuk memilih file',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
		});
	});
</script>
<script>
$('#datepicker').datepicker({
 format: "yyyy-mm-dd",
 autoclose: true
})
</script>
<script>
//Timepicker
$('.timepicker').timepicker({
  showInputs: true
})
</script>
</body>
</html>
