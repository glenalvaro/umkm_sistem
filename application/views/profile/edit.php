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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 18px; font-weight: bold;">
              Edit Profile
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<?= form_open_multipart('user/edit_profile'); ?>

<section class="content form-horizontal">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <center><img src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" class="img-thumbnail" width="150" height="145">
              </center>
              <br>  
              <center>
              <p class="text-center text-bold">Foto Sebelumnya</p>
              <p class="text-muted text-center text-red">(Kosongkan, jika foto tidak berubah)</p>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="foto" name="foto">
                  <label class="custom-file-label" for="foto">Choose File</label>
              </div>
              <center>
              <small>Ukr max 5 mb</small>
              <small class="text-red">gif|jpg|png</small>
              </center>
              </center>    
            </div>  
          </div>
        </div>
        
        <div class="col-md-9">
          <div class="card">
            <div class="card-body">
             <div class="box-header with-border">
                <a href="<?php echo base_url('user/profile'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali Ke Data Profil</a>
                </div>
                <br>
                   <div class="form-group">
                    <label class="col-sm-3">Email</label>
                    <div class="col-sm-10">
                      <input type="text" name="email" id="email" class="form-control input-sm" value="<?= $user['email']; ?>" readonly>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" id="nama" class="form-control input-sm" value="<?= $user['nama']; ?>">
                       <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_hp" id="no_hp" class="form-control input-sm" value="<?= $user['no_hp']; ?>">
                       <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" id="alamat" class="form-control input-sm" value="<?= $user['alamat']; ?>">
                       <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                  </div>

                  <div class='col-12'>
                    <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
</section>
</div>
