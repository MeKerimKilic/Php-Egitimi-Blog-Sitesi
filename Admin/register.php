<?php
include_once '../config.php';
include_once '../Database/index.php';
include_once '../Core/index.php';
include_once 'Controller/register.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= GetSettingsTable()['title'] ?> | Giriş</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition login-page">

	<div class="register-box">
	  <div class="card card-outline card-primary">
	    <div class="card-header text-center">
	      <a href="/" class="h1"><?= GetSettingsTable()['title'] ?></a>
	    </div>
	    <div class="card-body">
	      

	      <form action="#" method="post">
	        <div class="input-group mb-3">
	          <input type="text" class="form-control" name="full_name" placeholder="İsim Soyisim">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-user"></span>
	            </div>
	          </div>
	        </div>
	        <div class="input-group mb-3">
	          <input type="email" class="form-control" name="email" placeholder="E-mail">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-envelope"></span>
	            </div>
	          </div>
	        </div>
	        <div class="input-group mb-3">
	          <input type="password" class="form-control" name="password" placeholder="Şifre">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
	        </div>
	        <div class="input-group mb-3">
	          <input type="password" class="form-control" name="repeat_password" placeholder="Tekrar Şifre">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	     
	          <div class="col-4">
	            <button type="submit" class="btn btn-primary btn-block">Kayıt Ol</button>
	          </div>
	          <!-- /.col -->
	        </div>
	      </form>

	     

	      <a href="/admin/login.php" class="text-center">Giriş Yap</a>
	    </div>
	    <!-- /.form-box -->
	  </div><!-- /.card -->
	</div>
	<!-- /.register-box -->



	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- SweetAlert2 -->
	<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

	<?php if(!empty($alert)){ ?>
	<script type="text/javascript">
	  Swal.fire({
	    icon: '<?= $alert['type'] ?>',
	    title: '<?= $alert['message'] ?>',
	    showConfirmButton: false,
	    timer: 1500
	  }).then((result) => {
	  	<?php if(!empty($alert)){ ?>
	
			 window.location='<?= $alert['src'] ?>'
	   
	   <?php } ?>
	 });
	
	</script>

	<?php } ?>

</body>
</html>
