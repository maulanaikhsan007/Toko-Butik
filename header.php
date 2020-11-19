<?php include'koneksi.php'; 
include'valid.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <meta name="description" content="https://layanancoding.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/icon.png">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center">
            <h2 class="h5">ADMIN</h2><span></span>
          </div>
          <div class="sidenav-header-logo"><a href="master.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">X</strong></a></div>
        </div>
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu Pilihan</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="master.php"> <i class="icon-home"></i>BERANDA</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-screen"></i>Data Master</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
               
                  <li><a href="user_add.php"><i class="icon-screen"></i> Admin</a></li>
                  <li> <a href="kategori_add.php"> <i class="icon-screen"> </i>Tambah Kategori</a></li>
                   <li> <a href="barang_add.php"> <i class="icon-screen"> </i>Tambah Barang</a></li>
                   <li> <a href="pesanan_add.php"> <i class="icon-screen"> </i>Pesanan</a></li>
                   <li> <a href="pelanggan_add.php"> <i class="icon-screen"> </i>Pelanggan</a></li>

              </ul>
        </div>

  
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="master.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary">Butix Admin</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-home"></i><span class="badge badge-info">Tools</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                  
                       <li><a rel="nofollow" href="master.php" class="dropdown-item d-flex"> 
                        <li><a rel="nofollow" href="keluar.php" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/keluar.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Keluar</h3>
                        </div></a></li>
                       
              </ul>
            </div>
          </div>
        </nav>
      </header>