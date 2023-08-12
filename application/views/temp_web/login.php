<?php foreach($setting as $r) : ?>
<section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <center>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Login</h3>
              <small><?= $this->session->flashdata('message'); ?></small>
              <form action="<?= base_url('auth'); ?>" method="post" autocomplete="on">
                <div class="row">
                <div class="form-group mt-3">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                  value="">
                   <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mt-3">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <center>
                    <input type="checkbox" class="form-check-input mt-3" id="togglePassword">
                    <label class="form-check-label mt-3" for="exampleCheck1"><small>Tampilkan Kata Sandi</small></label>
                </center>
                   <button type="submit" class="btn btn-outline-danger btn-user mt-3">
                    <b style="font-size: 11pt;">LOGIN</b>
                  </button>
                   <hr class="mt-3">
                  <center>
                    <div style="font-size: 13px;">
                   <a href="<?= base_url('auth/forgotPassword'); ?>">Lupa Password ?</a><br>
                   <a href="<?= base_url('auth/daftar'); ?>" class="text-center">Belum punya akun ? Daftar!</a>
                 </div>
                  </center>
              </div>
              </form>
            </div>
          </div>
        </center>

          
        </div>
      </div>
    </section>
  </main>

  <?php endforeach; ?>