<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/loginstyle.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/font/sanspro.css">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">

  <style type="text/css">
              #latarbelakang {
                  background-color: rgba(0, 0, 0, 0.57);
                  padding: 20px;
              }
              body{
             		background-blend-mode: darken;
             		transition: 3s;
             	}
              blockquote {
               background-color: rgba(0, 0, 0, 0.57);
              }
             	html {
             	    position: relative;
             	    min-height: 100%;
             	}
             	.carousel-fade .carousel-inner .item {
             	    opacity: 0;
             	    transition-property: opacity;
             	}
             	.carousel-fade .carousel-inner .active {
             	    opacity: 1;
             	}
             	.carousel-fade .carousel-inner .active.left,
             	.carousel-fade .carousel-inner .active.right {
             	    left: 0;
             	    opacity: 0;
             	    z-index: 1;
             	}
             	.carousel-fade .carousel-inner .next.left,
             	.carousel-fade .carousel-inner .prev.right {
             	    opacity: 1;
             	}
             	.carousel-fade .carousel-control {
             	    z-index: 2;
             	}
             	@media all and (transform-3d),
             	(-webkit-transform-3d) {
             	    .carousel-fade .carousel-inner > .item.next,
             	    .carousel-fade .carousel-inner > .item.active.right {
             	        opacity: 0;
             	        -webkit-transform: translate3d(0, 0, 0);
             	        transform: translate3d(0, 0, 0);
             	    }
             	    .carousel-fade .carousel-inner > .item.prev,
             	    .carousel-fade .carousel-inner > .item.active.left {
             	        opacity: 0;
             	        -webkit-transform: translate3d(0, 0, 0);
             	        transform: translate3d(0, 0, 0);
             	    }
             	    .carousel-fade .carousel-inner > .item.next.left,
             	    .carousel-fade .carousel-inner > .item.prev.right,
             	    .carousel-fade .carousel-inner > .item.active {
             	        opacity: 1;
             	        -webkit-transform: translate3d(0, 0, 0);
             	        transform: translate3d(0, 0, 0);
             	    }
             	}
             	.item:nth-child(1) {
             	    background: url(<?php base_url() ?>assets/bglogin/1.JPG) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(2) {
             	    background: url(<?php base_url() ?>assets/bglogin/2.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(3) {
             	    background: url(<?php base_url() ?>assets/bglogin/3.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(4) {
             	    background: url(<?php base_url() ?>assets/bglogin/4.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(5) {
             	    background: url(<?php base_url() ?>assets/bglogin/5.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.item:nth-child(6) {
             	    background: url(<?php base_url() ?>assets/bglogin/6.jpg) no-repeat center center fixed;
             	    -webkit-background-size: cover;
             	    -moz-background-size: cover;
             	    -o-background-size: cover;
             	    background-size: cover;
             	}
             	.carouselnew {
             	    z-index: -99;
             	}
             	.carouselnew .item {
             	    position: fixed;
             	    width: 100%;
             	    height: 100%;
             	}
             	.title {
             	  text-align: center;
             	  margin-top: 20px;
             	  padding: 10px;
             	  text-shadow: 2px 2px #000;
             	  color: #FFF;
             	}
          </style>
          <script type="text/javascript">
          	$('#mybgcarousel').carousel({interval: 2000});
          	$('#myCarousel').carousel({interval: 500});
          </script>
</head>
<body>
 <div class="carousel carouselnew slide carousel-fade" id="mybgcarousel" data-ride="carousel">
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	        <div class="item active">
	        </div>
	        <div class="item">
	        </div>
	        <div class="item">
	        </div>
	        <div class="item">
	        </div>
	        <div class="item">
	        </div>
	        <div class="item">
	        </div>
	    </div>
	    <!-- Left and right controls -->
	</div>

 <div class="login-page">
	  <div class="login-content">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-7" style="color: #fff;">
						<blockquote>
							<h1 style="color: #fff"><strong>SITA GEOFISIKA </strong></h1>
							<p>Selamat Datang di Sistem Informasi Tugas Akhir GEOFISIKA ITERA.</p>
							<p>Jangan memberikan akun login (nama pengguna dan kata sandi) anda pada siapapun. <br>Keamanan data anda terletak pada anda sendiri.</p>
						  	<footer style="color: #fff">Administrator</footer>
						</blockquote>
					</div>
					<div class="col-lg-4 col-md-4 col-md-offset-1 col-sm-5">

						<div class="login-box">
						  <div class="form-title" id="latarbelakang">
						     <font color="white">
						      <h1><i class="glyphicon glyphicon-lock"></i>&nbsp; <b>SITA</b> Login</h1>
						     </font>
						  </div>
						  <!-- /.login-logo -->
						  <div class="form-body">
						   <?php
						   $info = $this->session->flashdata('info');
						   if(!empty($info))
						   {
						    echo $info;
						   }
						   ?>
						   <p>&nbsp</p>
						    <form method="POST" action="<?php echo base_url();?>login/getlogin" onsubmit="return cekform();">
						      <div class="form-group has-feedback">
						        <input type="Email" name="Email" id="Email" class="form-control" placeholder="Email" required>
						        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						      </div>

						      <div class="form-group has-feedback">
						        <input type="password" name="password" id="password" class="form-control" placeholder="Sandi" required>
						        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
						      </div>

						      <div class="row">
						        <div class="col-xs-5">
						          <p><?php echo $image ?></p>
						        </div>
						      </div>

						      <div class="form-group has-feedback">
						        <input type="text" name="captcha_code" id="captcha_code" class="form-control" placeholder="Ketikkan kode diatas" required>
						        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
						      </div>

						      <div class="row">
						        <div class="col-xs-8">
						          <div class="checkbox icheck">
						            <label>
						              <input type="checkbox">&nbsp&nbspIngat Saya
						            </label>
						          </div>
						        </div>
						        <!-- /.col -->
						        <div class="col-xs-4">
               <div class="text-right">
						          <button type="submit" class="btn btn-primary">
						           <i class="fa fa-sign-in"></i>
						           Masuk
						          </button>
               </div>
						        </div>
						        <!-- /.col -->
						      </div>
						    </form>

						    <div class="text-center">
           <p><font color="#1a1816">- Atau -</font></p>
						    </div>
						    <div class="row">
						      <!-- <div class="col-xs-8">
						       <div class="text-left">
						        <a href="<?php echo base_url();?>Lupapas" class="btn btn-danger">
						         <i class="fa fa-key"></i>
						         Lupa Password
						        </a>
						       </div>
						      </div> -->
						      <!-- /.col -->
						      <div class="col-xs-4">
						       <div class="text-right">
						        <a href="<?php echo base_url();?>Register"  class="btn btn-success">
						         <i class="fa fa-user"></i>&nbsp
						         Daftar
						        </a>
						       </div>
						      </div>
						      <!-- /.col -->
						    </div>
						  </div>
						  <!-- /.login-box-body -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /.login-box -->
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
  if (!$("#Email").val())
  {
   alert('Maaf email tidak boleh kosong');
   $("#Email").focus();
   return false;
  }

  if (!$("#password").val())
  {
   alert('Maaf password tidak boleh kosong');
   $("#password").focus();
   return false;
  }
 }
 </script>
</body>
</html>
