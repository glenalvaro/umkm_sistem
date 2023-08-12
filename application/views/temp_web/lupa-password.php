
<!DOCTYPE html>
<html lang="en">
<head>
<?php foreach($setting as $ss) : ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <link rel="icon" href="<?= base_url('assets/img/') . $ss['logo']; ?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card col-md-12">
    <div class="card-body login-card-body">
        <div class="login-logo">
            <p style="font-size: 18px; font-weight: bold;" href="#">Reset Your Password</p>
        </div>
      <p class="login-box-msg">Masukkan alamat email Anda.</p>
       <small><?= $this->session->flashdata('message'); ?></small>
      <form action="<?= base_url('auth/forgotPassword'); ?>" method="post" autocomplete="on">
        <div class="input-group mb-3">
              <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                  value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p class="mb-2"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?></p>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-danger btn-block">Send Password Reset Link</button>
          </div>
        </div>
      </form>
      <hr>
      <p class="mt-3 mb-1 text-center">
        <a href="<?= base_url('auth') ?>">Login</a>
      </p>
    </div>
  </div>
</div>

<?php endforeach; ?>

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
