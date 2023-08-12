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
.peta-judul{
    position: absolute;
    top: 35px;
    left: 65px;
    z-index: 1000;
    background: #fffb;
    padding: 10px 20px;
  }
  .peta-judul h2{
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
  }
</style>
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
              <br>
              <div class="peta-judul">
                  <h2 style="font-size:15px;">WebGIS UMKM SULUT</h2>
              </div>
              <div id="map" style="height: 560px;"></div>
          </div>
        </div>
      </div>
    </section>
</div>

<?php foreach($getUmkm as $main) : ?>
<!-- Detail Data UMKM -->
 <div class="modal fade" id="modal-umkm<?= $main['id']; ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="font-size: 18px; font-weight:bold;" class="modal-title">Detail Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Nama Pemilik </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['nama_pemilik'] ?>" style="width: 80%;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Nama UMKM</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['nama_usaha'] ?>" style="width: 80%;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Sektor</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['kategori'] ?>" style="width: 80%;" readonly>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['alamat'] ?>" style="width: 80%;" readonly>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label class="col-sm-2 control-label">No Handphone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['no_hp'] ?>"  style="width: 80%;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Kelurahan/Desa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['kelurahan'] ?>"  style="width: 60%;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Kecamatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['kecamatan'] ?>"  style="width: 60%;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Kabupaten/Kota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['kabupaten'] ?>"  style="width: 60%;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Provinsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['provinsi'] ?>"  style="width: 80%;" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 control-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control input-sm" value="<?= $main['kode_pos'] ?>"  style="width: 40%;" readonly>
                    </div>
                  </div>
                </form>

                
               <div class="card-body col-sm-8">
                  <div id="foto_usaha<?= $main['id']; ?>" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                       <?php

                      $id = $main['id'];
                      $queryFoto = "SELECT `galeri_foto`.`id_umkm`, `nama_usaha`, `nama_foto` FROM `tb_produk` INNER JOIN `galeri_foto` ON `tb_produk`.`id`=`galeri_foto`.`id_umkm` Where `tb_produk`.`id`='$id'";

                       $foto = $this->db->query($queryFoto)->result_array();
                      ?>
                      <?php $i=0; foreach ($foto as $row): ?>
                      <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
                      <div class="carousel-item <?php echo $set_; ?>">
                            <img src="<?= base_url('assets/upload/galery/').$row['nama_foto']; ?>" class="d-block w-100">
                      </div>
                      <?php $i++; endforeach ?>
                    </div>

                  <a class="carousel-control-prev" href="#foto_usaha<?= $main['id']; ?>" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#foto_usaha<?= $main['id']; ?>" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>

              <br>
            </div>
            <div class="modal-footer">
              <button style="float: right;" type="button" class="btn btn-danger btn-sm btn-flat"data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
<?php endforeach; ?>




<?php foreach($setting as $se ) : ?>
<script>
  var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/"></a>, ' +
      'UMKM Sulut <a href="https://www.mapbox.com/"></a>',
    id: 'mapbox/streets-v11',
   tileSize: 512,
    zoomOffset: -1
  });

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' +
      'UMKM Sulut © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/satellite-v9',
  });


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  });

var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' +
      'UMKM Sulut © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/dark-v10'
  });

var map = L.map('map', {
    center: [1.475362, 124.844562],
    zoom: <?= $se['zoom_peta'] ?>,
    layers: [peta1]
});

var baseMaps = {
    "Light": peta1,
    "Satellite": peta2,
    "Street" : peta3,
    "Dark" : peta4,
};

L.control.layers(baseMaps).addTo(map);

var icon_umkm = L.icon({
    iconUrl: '<?= base_url('assets/img/icon/').$se['icon_peta']; ?>',
    iconSize: [30, 37], 
});


<?php foreach($getUmkm as $u) : ?>
  L.marker([<?= $u['latitude'] ?>, <?= $u['longitude'] ?>], {icon:icon_umkm}).addTo(map)
    .bindPopup("<b>Nama UMKM : <?= $u['nama_usaha'] ?></b><br/>"+
      "Alamat : <?= $u['alamat'] ?><br>"+
      "Telepon : <?= $u['no_hp'] ?><br>"+
      "Nama Pemilik : <?= $u['nama_pemilik'] ?><br><br>"+
      "<center><img width='155px' height='105px' src='<?= base_url('assets/upload/') . $u['gambar']; ?>' /></center><br>"+
      "<center><a href='#' class='btn btn-info btn-flat btn-sm' data-toggle='modal' data-target='#modal-umkm<?= $u['id']; ?>'><small style='color:#fff;'>Detail</small></a></center>");
<?php endforeach; ?>

</script>

<?php endforeach; ?>