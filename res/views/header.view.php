<!DOCTYPE html>
<html lang="sp">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $title ?></title>
 
 
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="res/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="res/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="res/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.css"/>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-user-cog"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item" id="ocultar" data-toggle="modal" data-target="#usuarioModal">
                <i class="fas fa-user-plus mr-2"></i> Añadir usuario
                </a>
                <div class="dropdown-divider" id="ocultar"></div>
                <a href="#" class="dropdown-item" id="ocultar" data-toggle="modal" data-target="#passwordModal">
                    <i class="fas fa-key mr-2"></i> Cambiar Contraseña
                </a>
                <div class="dropdown-divider"></div>
                <a href="close.php" class="dropdown-item">
                    <i class="fas fa-times mr-2"></i> Cerrar Sesion
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer text-center"><?= $nombre ?></a>
              </div>
            </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="res/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cooperativa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $nombre?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="referentes.php" class="nav-link">
              <i class="nav-icon far fa-clock"></i>
              <p>
                Fichaje
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="info_fichajes.php" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>
                Informacion fichaje
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="socios.php" class="nav-link">
              <i class="nav-icon fas fa-align-justify"></i>
              <p>
                Socios
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="area.php" class="nav-link">
              <i class="nav-icon far fa-bookmark"></i>
              <p>
                Area
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>