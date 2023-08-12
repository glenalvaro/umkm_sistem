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
            <h1 style="font-size: 20px; font-weight: bold;">
              Edit Berita<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Berita</a></li>
              <li class="breadcrumb-item active">add</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<?php foreach($editBerita as $main) : ?>
<?= form_open_multipart('berita/update_berita'); ?>

<section class="content form-horizontal">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <center><img src="<?= base_url('assets/upload/artikel/') . $main->gambar;  ?>" class="img-thumbnail" width="150" height="145">
              </center>
              <br>  
              <center>
              <p class="text-center text-bold">Thumbnail Berita</p>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="gambar" name="gambar">
                  <label class="custom-file-label" for="gambar">Choose File</label>
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
                <a href="<?php echo base_url('berita'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali Ke Data Berita</a>
                </div>
                <br>
                <div class="form-group">
                <label class="col-sm-3">Tgl Posting</label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id" value="<?= $main->id; ?>">
                      <input type="text" name="tgl" id="tgl" value="<?= $main->tgl; ?>" class="form-control input-sm" readonly/>
                  </div>
                </div>

                   <div class="form-group">
                    <label class="col-sm-3">Judul Berita</label>
                    <div class="col-sm-10">
                      <input type="text" name="judul" id="judul" value="<?= $main->judul; ?>" class="form-control input-sm">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Kategori Berita</label>
                    <div class="col-sm-10">
                      <input type="text" name="tags" id="tags" value="<?= $main->tags; ?>" class="form-control input-sm">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Isi Berita</label>
                    <div class="col-sm-10">
                      <textarea id="summernote" id="konten" name="konten"><?= $main->konten; ?></textarea>
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
<?php endforeach; ?>
</section>
</div>
