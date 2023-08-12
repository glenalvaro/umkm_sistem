<style>
.form-horizontal {
    text-align: left;
}

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
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="font-size: 20px; font-weight: bold;">
              Edit Data Pengguna<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('user') ?>">Data Penggunan</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<?= form_open_multipart('user/update_user'); ?>

<?php foreach($editUser as $e) : ?>
 <section class="content form-horizontal">
      <div class="card">
        <div class="card-header">
           <a href="<?php echo base_url('user'); ?>" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Manajemen Pengguna</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12">
                  <h4 style="font-size: 18px; font-weight:bold;">Edit Data</h4>
                    <div class="post">
                    </div>
                    <div class="post">
                      <div class="form-group">
                        <label class="col-sm-2">Nama Lengkap :</label>
                        <div class="col-md-10">
                          <input type="hidden" name="id" value="<?= $e->id; ?>">
                          <input type="text" name="nama" class="form-control input-sm" value="<?= $e->nama; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2">Email :</label>
                        <div class="col-md-10">
                          <input type="text" class="form-control input-sm" value="<?= $e->email; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2">Password :</label>
                        <div class="col-md-10">
                          <input type="text" name="password" class="form-control input-sm" placeholder="kosongkan jika password tidak diganti">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2">Alamat :</label>
                        <div class="col-md-10">
                          <input type="text" name="alamat" class="form-control input-sm" value="<?= $e->alamat; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2">Nomor Handphone :</label>
                        <div class="col-md-10">
                          <input type="text" name="no_hp" class="form-control input-sm" value="<?= $e->no_hp; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2">Group :</label>
                        <div class="col-md-10">
                         <select name="level" class="form-control input-lg">
                          <option value="<?= $e->level; ?>">
                             <?php 
                                if($e->level == 1 ){
                                  echo "Administrator";
                                } else {
                                  echo "Author";
                                }
                              ?>
                          </option>
                           <option value="1">Administrator</option>
                           <option value="2">Author</option>
                         </select>
                        </div>
                        <br>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 style="font-size: 20px;" class="text-primary"><i class="fas fa-image"></i>&nbsp; Foto Sebelumnya</h3>
              <br>
                <center>
                  <img style="width: 143px; height: 133px; border: 3px solid #ccc;" src="<?= base_url('assets/img/profile/') . $e->foto; ?>" class="user-image" title="foto">
                </center>
              <br>
              <div class="text-muted">
                <p class="text-center text-bold">Foto Sebelumnya</p>
                <p class="text-muted text-center text-red">(Kosongkan, jika foto tidak berubah)</p>
              </div>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="foto" name="foto">
                  <label class="custom-file-label" for="foto">Choose File</label>
              </div>

              <div class="text-center mt-5 mb-3">
                <button type="submit" class="btn btn-sm btn-info btn-sm btn-block btn-flat">
                  <i class="fas fa-check">&nbsp; Simpan</i>
                </button>
                <a href="<?= site_url('user') ?>" class="btn btn-sm btn-warning btn-block btn-flat">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php endforeach; ?>