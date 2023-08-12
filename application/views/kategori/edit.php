<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
              Edit Data Kategori<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Kategori</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<?php foreach($editKategori as $main) : ?>
<form class="form-horizontal" action="<?= base_url('kategori/update_kategori') ?>" method="post">
<section class="content">
      <div class="card">
        <div class="card-header">
           <a href="<?php echo base_url('kategori'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Manajemen Kategori</a>
        </div>
        <div class="card-body">
            <div class="form-group">
              <label class="col-sm-2">Nama Kategori :</label>
              <div class="col-md-8">
                <input type="hidden" name="id" value="<?= $main->id; ?>">
                <input type="text" class="form-control" name="nama_kategori" value="<?= $main->nama_kategori; ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2">Keterangan :</label>
              <div class="col-md-8">
                <textarea name="keterangan" class="form-control" value="<?= $main->keterangan; ?>"><?= $main->keterangan; ?></textarea>
              </div>
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-social btn-flat btn-success btn-sm start"  style="float: right;"><i class="fa fa-check"></i> Simpan</button>
            </div>
        </div>
      </div>
    </section>
  </form>
<?php endforeach; ?>  
</div>