<style>
  label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    padding: 5px
    font-weight: 700;
    font-size: 12px;
}
.input-sm {
    height: 25px;
    padding: 13px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px;
}
</style>
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-12 form-horizontal">
            <br>
            <br>
            <div class="portfolio-info">
              <h3>Daftar Akun UMKM Provinsi Sulut</h3>
              <small><?= $this->session->flashdata('message'); ?></small>
              <form action="<?= base_url('auth/daftar'); ?>" method="post" autocomplete="on">
                <div class="row">
                <div class="form-group mt-3">
                  <label class="col-sm-2"><b>Nama Lengkap (Sesuai KTP) :</b></label>
                   <div class="col-md-6">
                      <input type="text" id="nama" name="nama" class="form-control input-sm" placeholder="Nama" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>


                <div class="form-group mt-3">
                  <label class="col-sm-2"><b>Email :</b></label>
                    <div class="col-md-8">
                      <input type="text" id="email" name="email" class="form-control input-sm" placeholder="Email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <small><i style="color: red;">Link verifikasi akan dikirim ke email. Email harus aktif !</i></small>
                </div>

                <div class="form-group mt-3">
                  <label class="col-sm-2"><b>Nomor Handphone :</b></label>
                    <div class="col-md-4">
                      <input type="text" id="no_hp" name="no_hp" class="form-control input-sm" placeholder="Nomor Hp" value="<?= set_value('no_hp'); ?>">
                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                 <div class="form-group mt-3">
                  <label class="col-sm-2"><b>Alamat :</b></label>
                    <div class="col-md-8">
                      <textarea class="form-control input-sm" id="alamat" name="alamat" placeholder="Isi Sesuai Alamat" style="height: 30%;"></textarea>
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                 <div class="form-group mt-3">
                  <label class="col-sm-2"><b>Password :</b></label>
                    <div class="col-md-8">
                      <input type="password" id="password1" name="password1" class="form-control input-sm" placeholder="Password" value="<?= set_value('alamat'); ?>">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                 <div class="form-group mt-3">
                  <label class="col-sm-2"><b>Repeat Password :</b></label>
                    <div class="col-md-8">
                      <input type="password" id="password2" name="password2" class="form-control input-sm" placeholder="Password">
                    </div>
                </div>


                <div class="form-check mt-4" style="margin-left:9px;">
                    <input type="checkbox" id="syarat_daftar" oninput="validasi()" name="id[]" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1"> Saya menyetujui syarat dan ketentuan privasi yang berlaku.</label>
                </div>

                  <div class="text-center">
                    <button type="submit" name="syarat" class="btn btn-danger btn-sm btn-block btn-flat mt-3" disabled="">Register Akun</button>
                  </div>

                   <hr class="mt-3">
                  <center>
                    <div style="font-size: 14px;">
                   <a href="<?= base_url('auth'); ?>" class="text-center">Sudah punya akun ? Login !</a>
                 </div>
                  </center>
              </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>