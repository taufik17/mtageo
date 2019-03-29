<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SITA | Registration</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/font/sanspro.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php base_url() ?>Register"><b>Register</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="../../index.html" method="post" onsubmit="return cekform()">
      <div class="form-group has-feedback">
        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="rpassword" id="rpassword" class="form-control" placeholder="Retype password" required="">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">&nbsp&nbspI agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn bg-green btn-block btn-flat">
           <i class="fa fa-user"></i>&nbsp
           Register
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <div class="text-left">
       <a href="<?php echo base_url();?>Login" class="btn bg-yellow btn-block btn-flat">
        <i class="fa fa-chevron-left"></i> &nbsp &nbsp
        I already have a membership
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
