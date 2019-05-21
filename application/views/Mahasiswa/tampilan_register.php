<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SITA | Pendaftaran</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
  <link rel="icon" type="image/png" href="<?php base_url() ?>assets/gambar/favicon.png">

  <style type="text/css">
              #latarbelakang {
                  background-color: rgba(0, 0, 0, 0.57);
                  padding: 20px;
              }
          </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo" id="latarbelakang">
     <font color="white">
      <h2><i class="glyphicon glyphicon-user"></i>&nbsp; <b>Pendaftaran</b></h2>
     </font>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Gunakan Email ITERA</p>
    <?php
    $info = $this->session->flashdata('info');
    if(!empty($info))
    {
     echo $info;
    }
    ?>
    <form action="<?php base_url() ?>Register/simpan" method="post" onsubmit="return cekform()">
      <div class="form-group has-feedback">
        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Sandi" minlength="8" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="rpassword" id="rpassword" class="form-control" placeholder="Konfirmasi Sandi" minlength="8" required="">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">&nbsp&nbspSaya Menyetujui <a href="#">Persyaratan</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn bg-green btn-block btn-flat">
           <i class="fa fa-user"></i>&nbsp
           Daftar
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Atau -</p>
      <div class="text-left">
       <a href="<?php echo base_url();?>Login" class="btn bg-yellow btn-block btn-flat">
        <i class="fa fa-chevron-left"></i> &nbsp &nbsp
        Sudah Mempunyai Akun
       </a>
      </div>
    </div>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php base_url() ?>assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script type="text/javascript">
 function cekform()
 {

  var str = $("#email");
  var n = str.includes("@student.itera.ac.id");
  if (n == FALSE)
  {
   alert('bukan email itera');
   $("#email").focus();
   return false;
  }

  if (!$("#name").val())
  {
   alert('Maaf full name tidak boleh kosong');
   $("#name").focus();
   return false;
  }
  if (!$("#email").val())
  {
   alert('Maaf email tidak boleh kosong');
   $("#email").focus();
   return false;
  }
  if (!$("#password").val())
  {
   alert('Maaf password tidak boleh kosong');
   $("#password").focus();
   return false;
  }
  if (!$("#rpassword").val())
  {
   alert('Maaf pengulangan password tidak boleh kosong');
   $("#rpassword").focus();
   return false;
  }
 }
 </script>
</body>
</html>
