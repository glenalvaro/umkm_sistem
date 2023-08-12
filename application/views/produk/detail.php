<style>
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
</style>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 18px; font-weight: bold;">
              Detail UMKM
             </h1>
          </div>
        </div>
      </div>
    </section>

<?php foreach($lihatUmkm as $main) : ?>
    <section class="content">
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6 mt-4">
              <h3 style="font-size: 20px; font-weight:bold;" class="d-inline-block d-sm-none">Gambar UMKM</h3>
              <div class="col-12 product-image-thumbs">
                 <img src="<?= base_url('assets/upload/').$main->gambar; ?>" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 style="font-size: 18px; font-weight:bold;" class="my-3">Data UMKM</h3>
              <hr>
              <a href="<?php echo base_url('produk'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Data UMKM</a>
              <br>
              <br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email :</label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control input-sm" value="<?= $main->email; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Pemilik :</label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control input-sm" value="<?= $main->nama_pemilik; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat :</label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control input-sm" value="<?= $main->alamat; ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">No Handphone :</label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control input-sm" value="<?= $main->no_hp; ?>" readonly>
                    </div>
                  </div>
              
              <!-- <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div> -->

            </div>
          </div>
          
            <div class="card-header p-2 mt-4">
                <ul style="font-size:15px;" class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#tempat" data-toggle="tab">Lokasi UMKM</a></li>
                  <li class="nav-item"><a class="nav-link" href="#biodata" data-toggle="tab">Biodata UMKM</a></li>
                  <li class="nav-item"><a class="nav-link" href="#galeri" data-toggle="tab">Galeri UMKM</a></li>
                </ul>
            </div>

            <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="tempat">
                    <div class="post">          
                       <div id="tempat_umkm" style="height: 400px;"></div>
                  </div>
                  </div>

                  <!-- Tab Biodata -->
                  <div class="tab-pane" id="biodata">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Usaha UMKM </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= $main->nama_usaha; ?>" readonly>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Sektor UMKM </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= $main->kategori; ?>" readonly>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Kelurahan </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= $main->kelurahan; ?>" readonly>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Kecamatan </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= $main->kecamatan; ?>" readonly>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Kabupaten/kota </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= $main->kabupaten; ?>" readonly>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Provinsi </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= $main->provinsi; ?>" readonly>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Kode Pos </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= $main->kode_pos; ?>" readonly>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-sm-3 control-label">Tgl Posting </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control input-sm" value="<?= date('d F Y', $main->tgl_posting ); ?>" readonly>
                        </div>
                      </div>

                       <div class="table-responsive">
                          <table>
                            <tr>
                              <label class="col-sm-3 control-label">Tentang UMKM </label>
                              <td class="embed-responsive-item embed-responsive-16by9"><?= $main->deskripsi; ?></td>
                            </tr>
                          </table>
                      </div>

                    </div>

                  <!-- Tab Galeri -->
                  <div class="tab-pane" id="galeri">
                    <form class="form-horizontal">
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?= base_url('assets/upload/').$main->gambar; ?>" alt="User Image">
                        <span class="username">
                          <a href="#"><?= $main->nama_usaha; ?></a>
                        </span>
                        <span class="description">Posted : &nbsp; <?= date('d F Y', $main->tgl_posting ); ?></span>
                      </div>
                     <?php foreach($lihatFoto as $row) : ?>
                      <div class="row mb-3">
                        <div class="col-12">
                          <img class="img-fluid" src="<?= base_url('assets/upload/galery/').$row['nama_foto']; ?>" width="300px;" height="330px;" alt="Photo">
                        </div>
                      </div>
                       <?php endforeach; ?>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
         
        </div>
      </div>
    </section>
  </div>
<?php endforeach; ?>



<script>
  <?php foreach($lihatUmkm as $l) : ?>
      var map = L.map('tempat_umkm').setView([<?= $l->latitude; ?>,<?= $l->longitude; ?>], 14);
  <?php endforeach; ?>

  var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
  }).addTo(map);

<?php foreach($lihatUmkm as $j) : ?>
  var marker = L.marker([<?= $j->latitude; ?>,<?= $j->longitude; ?>]).addTo(map)
    .bindPopup("<b>Nama Usaha : <?= $j->nama_usaha; ?></b><br/>"+
    "Alamat : <?= $j->alamat; ?><br>"+
    "No Handphone : <?= $j->no_hp; ?>");
<?php endforeach; ?>

</script>



