<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= GetSettingsTable()['title'] ?>  Yönetimi | Anasayfa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= GetSettingsTable()['title'] ?> Yönetimi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
        <div class="info">
          <a href="#" class="d-block">Kerim Kılıç</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">Menüler</li>
          <li class="nav-item">
            <a href="/admin/index" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/index.php')? 'active':'') ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Anasayfa
             
              </p>
            </a>
          </li>
          <?php if(IsRoleController()){ ?>
            <li class="nav-item">
              <a href="/admin/settings" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/settings.php')? 'active':'') ?>">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  Ayarlar
                </p>
              </a>
            </li>
          <?php } ?>
          <?php if(IsRoleController()){ ?>
           <li class="nav-item">
            <a href="/admin/menu" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/menu.php')? 'active':'') ?>">
              <i class="nav-icon fas fa-compass"></i>
              <p>
                Menüler
              </p>
            </a>
          </li>
          <?php } ?>
           <?php if(IsRoleController()){ ?>
           <li class="nav-item">
            <a href="/admin/slider" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/slider.php')? 'active':'') ?>">
              <i class="nav-icon fas fa-compass"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
          <?php } ?>
           <?php if(IsRoleController()){ ?>
            <li class="nav-item">
            <a href="/admin/pages" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/pages.php')? 'active':'') ?>">
              <i class="nav-icon fas fa-compass"></i>
              <p>
                Sayfalar
              </p>
            </a>
          </li>
          <?php } ?>
           <?php if(IsRoleController()){ ?>
            <li class="nav-item">
            <a href="/admin/users" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/users.php')? 'active':'') ?>">
              <i class="nav-icon fas fa-compass"></i>
              <p>
                Kullanıcılar
              </p>
            </a>
          </li>
          <?php } ?>
           <?php if(IsRoleController() || IsRoleController(1)){ ?>
            <li class="nav-item">
            <a href="/admin/post" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/post.php')? 'active':'') ?>">
              <i class="nav-icon fas fa-compass"></i>
              <p>
                Postlar
              </p>
            </a>
          </li>
            <?php } ?>
         <li class="nav-item">
            <a href="/admin/logout" class="nav-link <?= (strstr($_SERVER['SCRIPT_NAME'],'admin/logout.php')? 'active':'') ?>">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Çıkış
              </p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
