<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?= $title; ?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php foreach($setting as $main) : ?>

  <!-- Favicons -->
  <link rel="icon" href="<?= base_url('assets/img/') . $main['logo']; ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/files/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/files/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/files/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/files/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/files/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/files/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/files/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   <!-- pace-progress -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/pace-progress/themes/silver/pace-theme-material.css">
  <!-- Leaflet Js -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <!-- Locate Rute -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/leaflet-locatecontrol/dist/L.Control.Locate.min.css" />
  <script src="<?= base_url() ?>assets/plugins/leaflet-locatecontrol/src/L.Control.Locate.js"></script>


  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/files/css/style.css" rel="stylesheet">
   <link href="<?= base_url(); ?>assets/aset.css" rel="stylesheet">
</head>


<!-- ======= Top Bar ======= -->
<div class="topnav" id="myTopnav">
  <div class="container">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <span>UKM SULUT</span>
          <i class="bi bi-chevron-down"></i>
        </a>
       <?php if ($title == 'Usaha Kecil Menengah Mikro | Provinsi Sulawesi Utara') : ?>
                  <a style="color: #fff;" class="nav-item" href="<?= base_url('welcome') ?>">UMKM</a>
              <?php else : ?>
                   <a class="nav-item" href="<?= base_url('welcome') ?>">UMKM</a>
              <?php endif; ?>

              <?php if ($title == 'Usaha Kecil Menengah Mikro | Profil') : ?>
                  <a style="color: #fff;" class="nav-item" href="<?= base_url('welcome/profil') ?>">Profil</a>
              <?php else : ?>
                  <a class="nav-item" href="<?= base_url('welcome/profil') ?>">Profil</a>
              <?php endif; ?>

              <?php if ($title == 'Usaha Kecil Menengah Mikro | Gallery') : ?>
                   <a style="color: #fff;" class="nav-item" href="<?= base_url('welcome/galery') ?>">Galery</a>
              <?php else : ?>
                  <a class="nav-item" href="<?= base_url('welcome/galery') ?>">Galery</a>
              <?php endif; ?>

               <?php if ($title == 'Usaha Kecil Menengah Mikro | Info') : ?>
                   <a style="color: #fff;" class="nav-item" href="<?= base_url('welcome/info') ?>">Info</a>
              <?php else : ?>
                   <a class="nav-item" href="<?= base_url('welcome/info') ?>">Info</a>
              <?php endif; ?>   

             <!--  <div class="theme-switch-wrapper btn-bahasa d-flex" title="Mode Gelap">
                 <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                </label>
              </div> -->

                <a style="margin-top: -38px;" class="btn-bahasa d-flex">
                  <div class="dark-mode-2">
                    <input type="checkbox" class="checkbox" id="checkbox">
                      <label for="checkbox" class="label">
                        <i class="fas fa-moon"></i>
                        <i class='fas fa-sun'></i>
                          <div class='ball'></div>
                      </label>
                  </div>
                </a>

              <!-- <a class="btn-bahasa d-flex" style="color: #fff;" href="#contact">ID</a> -->

              <a href="<?= base_url('welcome/hubungi_kami') ?>" class="btn-kontak nav-link-kontak btn btn-outline-light align-items-center">
                  <i class="bx bx-phone bx-rotate-60 mt-1"></i> &nbsp;Hubungi Kami <i class='bx bx-chevron-right mt-1'></i>
              </a>
          <br>
        </div>
</div>


<body class="hold-transition">
<!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <div style="margin-left: 15px; text-align:justify; line-height: 1.3;"><a href="<?= base_url('welcome') ?>"><img src="<?= base_url() ?>assets/img/m.png" class="img-fluid" style="float:left; margin:0 8px 4px 0; width: 14%; margin-top: 3px;" />
          <small style="font-size:9px; letter-spacing: 2px;"><b>USAHA MIKRO KECIL MENENGAH </b></small><br>
          <small style="font-size:10px; letter-spacing: 1px;">PROVINSI SULAWESI UTARA</small></a>
        </div>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('welcome'); ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('welcome/berita'); ?>">Berita</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('welcome/#kategori'); ?>">Sektor</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('welcome/#umkm'); ?>">Data</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('welcome/#lokasi'); ?>">Peta UMKM</a></li>
          <li>
            <a href="<?php echo base_url('auth'); ?>" class="getstarted btn btn-outline-danger">
              <span>Login / Register</span>
              <i class="bx bx-user"></i>
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
     <!--  <a href="<?php echo base_url('auth'); ?>" class="d-none d-md-block nav-link-hubungi btn btn-outline-danger align-items-center" style="position: relative; top: 2px; float: left; margin-left: 20px; font-size: 13px;">
            <i class="bx bx-user bx-rotate-60 mr-1"></i> Login / Register
      </a> -->
    </div>
  </header>
  <?php endforeach; ?>

 