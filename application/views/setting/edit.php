<style>
.form-horizontal .control-label {
    text-align: left;
}

  label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    font-size: 12px;
}
.input-sm {
    height: 25px;
    padding: 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px;
}
.input-sm1 {
    height: 35px;
    padding: 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
              Ubah Data Sistem<small>&nbsp; control panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('setting'); ?>">Setting</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<?php foreach($ubahData as $ud) : ?>
  <form class="form-horizontal" action="<?= base_url('setting/update_data'); ?>" method="post" enctype="multipart/form-data">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-body">
              <br>
              <center>
                <img src="<?= base_url('assets/img/') . $ud->logo; ?>" width="118px" height="110px" value="<?= $ud->logo; ?>">
              </center>
              <br/>  
              <p class="text-center text-bold">Logo</p>
              <p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
              <center>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="logo" name="logo">
                  <label class="custom-file-label" for="logo">Upload logo</label>
              </div>
              <center>
              <small>Ukr max 2 mb</small>
              <small class="text-red">jpeg|jpg|png</small>
              </center>
              </center>    
            </div>  
          </div>
        </div>

        <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="<?php echo base_url('setting'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Pengaturan</a>
          </div>
          <div class="card-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><u>DATA</u></label>
                  </div>
                  
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Sistem</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id" value="<?= $ud->id; ?>">
                      <input type="text" name="nama_sistem" class="form-control input-sm" value="<?= $ud->nama_sistem; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Deskripsi</label>
                    <div class="col-sm-9">
                     <textarea style="height: 100px;" class="form-control input-sm" name="deskripsi" value="<?= $ud->deskripsi; ?>"><?= $ud->deskripsi; ?></textarea>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control input-sm" value="<?= $ud->alamat; ?>">
                    </div>
                  </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label"><u>PROFIL & KONTAK</u></label>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="text" name="email" class="form-control input-sm" value="<?= $ud->email; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kontak</label>
                    <div class="col-sm-10">
                      <input type="text" name="phone" class="form-control input-sm" value="<?= $ud->phone; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label"><u>SLIDER WEBSITE</u></label>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Slider 1</label>
                    <div class="col-sm-10">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="slider1" name="slider1">
                          <label class="custom-file-label" for="slider1">Upload gambar slider 1</label>
                      </div>
                      <br>
                      <br>
                        <img src="<?= base_url('assets/img/slider/') . $ud->slider1; ?>" width="60px" height="55px" value="<?= $ud->slider1; ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Title Slider 1</label>
                    <div class="col-sm-10">
                      <input type="text" name="title1" class="form-control input-sm" value="<?= $ud->title1; ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Deskripsi Slider 1</label>
                    <div class="col-sm-10">
                       <textarea style="height: 100px;" class="form-control input-sm" name="deskripsi1" value="<?= $ud->deskripsi1; ?>"><?= $ud->deskripsi1; ?></textarea>
                    </div>
                  </div>


                   <div class="form-group">
                    <label class="col-sm-3 control-label">Slider 2</label>
                    <div class="col-sm-10">
                     <div class="custom-file">
                          <input type="file" class="custom-file-input" id="slider2" name="slider2">
                          <label class="custom-file-label" for="slider2">Upload gambar slider 2</label>
                      </div>
                      <br>
                      <br>
                         <img src="<?= base_url('assets/img/slider/') . $ud->slider2; ?>" width="60px" height="55px" value="<?= $ud->slider2; ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Title Slider 2</label>
                    <div class="col-sm-10">
                      <input type="text" name="title2" class="form-control input-sm" value="<?= $ud->title2; ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Deskripsi Slider 2</label>
                    <div class="col-sm-10">
                       <textarea style="height: 100px;" class="form-control input-sm" name="deskripsi2" value="<?= $ud->deskripsi2; ?>"><?= $ud->deskripsi2; ?></textarea>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Slider 3</label>
                    <div class="col-sm-10">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="slider3" name="slider3">
                          <label class="custom-file-label" for="slider3">Upload gambar slider 3</label>
                      </div>
                      <br>
                      <br>
                        <img src="<?= base_url('assets/img/slider/') . $ud->slider3; ?>" width="60px" height="55px" value="<?= $ud->slider3; ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Title Slider 3</label>
                    <div class="col-sm-10">
                      <input type="text" name="title3" class="form-control input-sm" value="<?= $ud->title3; ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Deskripsi Slider 3</label>
                    <div class="col-sm-10">
                      <textarea style="height: 100px;" class="form-control input-sm" name="deskripsi3" value="<?= $ud->deskripsi3; ?>"><?= $ud->deskripsi3; ?></textarea>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Zoom Peta</label>
                    <div class="col-sm-10">
                      <select class="form-control input-sm" name="zoom_peta" style="height:35px;">
                        <option value="<?= $ud->zoom_peta; ?>"><?= $ud->zoom_peta; ?></option>
                        <?php
                              for ($i=5; $i <= 20; $i++) {
                              echo "<option value = $i > $i </option>";
                              }
                          ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Icon Peta</label>
                    <div class="col-sm-10">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="icon_peta" name="icon_peta">
                          <label class="custom-file-label" for="icon_peta">Upload icon</label>
                      </div>
                      <small class="text-red"><i>Hanya format PNG</i></small>
                      <br>
                      <br>
                        <img src="<?= base_url('assets/img/icon/') . $ud->icon_peta; ?>" width="60px" height="55px" value="<?= $ud->icon_peta; ?>">
                    </div>
                  </div>

              <div class='box-footer'>
                    <div class="col-sm-4">
                     <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                    <button type="submit" name="btnsimpan" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fas fa-check"></i>&nbsp; Simpan</button>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
</section>
<?php endforeach; ?>
</div>