
<!DOCTYPE html>
<html lang="en">
<head>
<?php foreach($setting as $sk) : ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <link rel="icon" href="<?= base_url('assets/img/') . $sk['logo']; ?>">
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
            <p style="font-size: 18px; font-weight: bold;" href="#">Buat Kata Sandi Baru</p>
        </div>
      <p class="login-box-msg"><?= $this->session->userdata('reset_email'); ?></p>
       <small><?= $this->session->flashdata('message'); ?></small>
      <form action="<?= base_url('auth/changePassword'); ?>" method="post" autocomplete="on">
        <div class="input-group mb-3">
              <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-2"><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?></p>
        <div class="input-group mb-3">
              <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-2"><?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?></p>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-danger btn-block">Change Password</button>
          </div>
        </div>
      </form>
      <hr>
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
