<style>
 label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    font-size: 12px;
    padding: 5px 10px;
    }
    .input-sm {
    height: 20px;
    padding: 13px;
    font-size: 11px;
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
              Tambah Data Pengguna<small>&nbsp; user</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Data Pengguna</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


<form class="form-horizontal" action="<?= base_url('user/add_user'); ?>" method="post" enctype="multipart/form-data" autocomplete="on">
<section class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Foto</h4>
            </div>
            <div class="card-body">
              <center><img class="profile-user-img img-responsive img-circle" src="<?= base_url()?>assets/img/profile/default.png">
              </center> 
              <br>
              <center>
                <p class="text-red">(Kosongkan jika tidak menambahkan foto)</p>
                <small>Ukr max 2 mb</small>
              <small class="text-red">|png|jpg|jpeg</small>
              </center>
              <br>
              <center>
              <div class="col-sm-12">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="foto" name="foto" required>
                  <label class="custom-file-label" for="foto">Choose File</label>
                </div>
              </div>
              </center>    
            </div>  
          </div>
        </div>

        <!-- Form Daftar User -->
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
                <a href="<?php echo base_url('user'); ?>" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Manajemen Pengguna</a>
            </div>
            <div class="card-body">

               <div class="form-group">
                  <label>Nama :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text input-sm"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="hidden" name="is_active" value="0">
                    <input type="hidden" name="date_created">
                    <input type="text" name="nama" id="nama" class="form-control input-sm" placeholder="Enter" value="<?= set_value('nama'); ?>">
                  </div>
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

               <div class="form-group">
                  <label>Email :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text input-sm"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Enter" value="<?= set_value('email'); ?>">
                  </div>
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group">
                  <label>Password :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text input-sm"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="text" name="password" id="password" class="form-control input-sm" placeholder="Enter">
                  </div>
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

               <div class="form-group">
                  <label>No Handphone :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text input-sm"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="no_hp" id="no_hp" class="form-control input-sm"   data-inputmask="'mask': ['9999-9999-[9999]', '+099 99 99 9999[9]-9999']" data-mask value="<?= set_value('no_hp'); ?>">
                  </div>
                  <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

               <div class="form-group">
                  <label>Alamat :</label>
                  <div class="input-group">
                    <textarea type="text" name="alamat" id="alamat" class="form-control input-sm" placeholder="Enter"></textarea>
                  </div>
                  <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group">
                  <label>Group :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text input-lg"><i class="fas fa-lock"></i></span>
                    </div>
                    <select class="form-control input-lg" name="level" id="level">
                      <option disabled selected>--Pilih group--</option>
                      <option value="1">Administrator</option>
                      <option value="2">Author</option>
                    </select>
                  </div>
                  <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>


              

                

             

              
             <div class='col-12'>
                <button type="submit" class="btn btn-social btn-flat btn-info btn-sm start"  style="float: right;"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
</form>
</section>
</div>








