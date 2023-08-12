
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $title; ?>
  </title>

<?php foreach($setting as $lg) : ?>

  <!-- Google Font: Source Sans Pro -->
 <link rel="icon" href="<?= base_url('assets/img/') . $lg['logo']; ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Box icons -->
  <link href="http://localhost/umkmsulut/assets/files/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- flag-icon-css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/flag-icon-css/css/flag-icon.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/input-file.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- Font -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/files/font_family.css">
  <!--   data tables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/dropzone/min/dropzone.min.css">
  <!-- pace-progress -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/pace-progress/themes/silver/pace-theme-flash.css"> -->
  <!-- Leaflet Js -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Mapbox -->
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
   <!-- Leaflet search -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/leaflet-search/src/leaflet-search.css" />
  <script src="<?= base_url() ?>assets/plugins/leaflet-search/src/leaflet-search.js"></script>

<!-- Style menu mobile -->
<style>
  #menu-bottom.nav {
    z-index: 999999;
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 77px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    background-color: #fff;
    display: flex;
    overflow-x: auto;
}
#menu-bottom .nav__link {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-grow: 1;
    min-width: 50px;
    overflow: hidden;
    white-space: nowrap;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    color: #444444;
    text-decoration: none;
    -webkit-tap-highlight-color: transparent;
    transition: background-color 0.1s ease-in-out;
}
#menu-bottom .nav__link:hover {
    background-color: #eeeeee;
}
#menu-bottom .nav__link--active {
    color: #bb1724;
}
#nav-icon {
     font-size: 18px;
}
    
@media (min-width: 992px) {
#menu-bottom.nav {
    display: none !important;
  }        
}

.nav__link .icon-nav{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 64px;
    height: 64px;
    margin-bottom: -30px;
    border: 2px solid #8dc2f1;
    z-index: 1000;
    border-radius: 55px;
    transition: 0.5s;
}

.nav__link .icon-nav i {
    margin-top: -12px;
    color: #1977cc;
    font-size: 38px;
}

/*Loader*/
#load-web { 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    width: 100%; 
    height: 100%;
    z-index: 9999;
    background: url("assets/img/loading.gif") 50% 50% no-repeat rgb(255, 255, 255);
    opacity: 0.9;
}
#load-web p {
    font-size: 18px; font-weight: bold; text-align: center;
    margin-top : 410px;
}
</style>
</head>
<!-- <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <div id="load-web">
        <p>Loading...</p>
    </div>
   <!-- Menu Mobile -->
   <nav id="menu-bottom" class="nav">
      <?php if($title == "Dashboard | Sistem Informasi UMKM Prov Sulut") : ?>
        <a href="<?= base_url('admin'); ?>" class="nav__link nav__link--active">
            <i class="bx bx-home"></i>
            <span class="nav__text mt-2">Home</span>
        </a>
      <?php else: ?>
        <a href="<?= base_url('admin'); ?>" class="nav__link">
            <i class="bx bx-home"></i>
            <span class="nav__text mt-2">Home</span>
        </a>
      <?php endif; ?>

      <?php if($title == "Profil | Sistem Informasi UMKM") : ?>
        <a href="<?= base_url('user/profile') ?>" class="nav__link nav__link--active">
            <i class="bx bx-user"></i>
            <span class="nav__text mt-2">Profil</span>
        </a>
      <?php else: ?>
        <a href="<?= base_url('user/profile') ?>" class="nav__link">
            <i class="bx bx-user"></i>
            <span class="nav__text mt-2">Profil</span>
        </a>
      <?php endif; ?>

      <?php if($title == "Data UMKM | Sistem Informasi UMKM") : ?>
        <a href="<?= base_url('produk'); ?>" class="nav__link nav__link--active">
            <div class="icon-nav">
               <i style="color:#bb1724; " class="bx bx-store"></i><br>
            </div>
            <span style="font-size:9px;" class="nav__text mt-2 mb-3">TOKO</span>
        </a>
      <?php else: ?>
        <a href="<?= base_url('produk'); ?>" class="nav__link">
            <div class="icon-nav">
               <i class="bx bx-store"></i><br>
            </div>
            <span style="font-size:9px;" class="nav__text mt-2 mb-3">TOKO</span>
        </a>
      <?php endif; ?>

      <?php if($title == "Lokasi UMKM | Sistem Informasi UMKM") : ?>
        <a href="<?= base_url('produk/lokasi_umkm'); ?>" class="nav__link nav__link--active">
            <i class="bx bx-map"></i>
            <span class="nav__text mt-2">Peta</span>
        </a>
      <?php else: ?>
        <a href="<?= base_url('produk/lokasi_umkm'); ?>" class="nav__link">
            <i class="bx bx-map"></i>
            <span class="nav__text mt-2">Peta</span>
        </a>
      <?php endif; ?>

        <a href="<?= base_url('auth/logout'); ?>" class="nav__link">
            <i class="bx bx-log-out"></i>
            <span class="nav__text mt-2">Keluar</span>
        </a>
  </nav>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <!-- Sembunyikan menu dasboard dimobile -->
        <!-- <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> -->
        <a class="nav-link" data-widget="" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    <!-- Language Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="flag-icon flag-icon-id"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="#" class="dropdown-item active">
            <i class="flag-icon flag-icon-id mr-2"></i> Indonesia
          </a>
           <a href="#" class="dropdown-item">
            <i class="flag-icon flag-icon-us mr-2"></i> English
          </a>
        </div>
      </li>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?= $user['nama'];?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-info">
            <img src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" class="img-circle elevation-2" alt="User Image">

            <p>
              <?= $user['nama'];?>
              <small>Member since <?= date('d F Y', $user['date_created']); ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?= base_url('user/profile') ?>" class="btn btn-default btn-flat btn-xs">Profile</a>
            <a href="<?= base_url('auth/logout'); ?>" class="btn btn-default btn-flat btn-xs float-right">Sign out</a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
<?php endforeach; ?>


 