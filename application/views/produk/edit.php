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
              Edit UMKM
             </h1>
          </div>
        </div>
      </div>
    </section>

<?php foreach($editUmkm as $value ) : ?>
<form action="<?= base_url('produk/update_umkm') ?>" method="post" enctype="multipart/form-data">
  <section class="content form-horizontal">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
                 <a href="<?php echo base_url('produk'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Data UMKM</a>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Pemilik</label>
                    <div class="col-md-12">
                      <input type="hidden" name="id" value="<?= $value->id; ?>">
                      <input type="hidden" name="tgl_posting" value="<?= $value->tgl_posting;  ?>">
                      <input type="text" name="nama_pemilik" class="form-control input-sm" value="<?= $value->nama_pemilik; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama UMKM</label>
                    <div class="col-md-12">
                      <input type="text" name="nama_usaha" class="form-control input-sm" value="<?= $value->nama_usaha; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Kategori</label>
                    <div class="col-md-12">
                       <select name="kategori" class="form-control" style="height:27px; font-size: 11px;">
                         <option value="<?= $value->kategori; ?>"><?= $value->kategori; ?></option>
                          <?php foreach($KategoriList as $kl) : ?>
                            <option value="<?= $kl['nama_kategori'] ?>"><?= $kl['nama_kategori'] ?></option>
                          <?php endforeach; ?>
                       </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-md-12">
                       <input type="text" name="alamat" class="form-control input-sm" value="<?= $value->alamat; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Provinsi</label>
                    <div class="col-md-10">
                       <input type="text" name="provinsi" class="form-control input-sm" value="<?= $value->provinsi; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Kabupaten</label>
                    <div class="col-md-10">
                       <input type="text" name="kabupaten" class="form-control input-sm" value="<?= $value->kabupaten; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Kecamatan</label>
                    <div class="col-md-10">
                       <input type="text" name="kecamatan" class="form-control input-sm" value="<?= $value->kecamatan; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Kelurahan</label>
                    <div class="col-md-10">
                       <input type="text" name="kelurahan" class="form-control input-sm" value="<?= $value->kelurahan; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Pos</label>
                    <div class="col-md-8">
                       <input type="text" name="kode_pos" class="form-control input-sm" value="<?= $value->kode_pos; ?>">
                    </div>
                </div>

                 <div class="form-group">
                    <div class="col-md-12">
                        <center><img src="<?= base_url('assets/upload/') . $value->gambar; ?>" class="img-thumbnail" width="300" height="245">
                        </center>
                        <center>
                        <p class="text-center text-bold">Gambar UMKM sebelumnya</p>
                        <p class="text-muted text-center text-red">(Kosongkan, jika foto tidak berubah)</p>
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
          </div>
        </div>

         <div class="col-md-6">
          <div class="card">
            <div class="card-header">
                <h4 style="font-size: 17px;" class="card-title">Edit Lokasi</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                    <!-- Map edit -->
                    <div class="col-md-12">
                        <div id="edit_map" style="height: 350px;"></div>
                    </div>
              </div>

              <div class="form-group">
                    <label class="col-sm-3 control-label">Latituted</label>
                    <div class="col-md-12">
                       <input type="text" id="Lat" name="latitude" class="form-control input-sm" value="<?= $value->latitude; ?>" readonly>
                    </div>
              </div>

               <div class="form-group">
                    <label class="col-sm-3 control-label">Longitude</label>
                    <div class="col-md-12">
                       <input type="text" id="Long" name="longitude" class="form-control input-sm" value="<?= $value->longitude; ?>" readonly>
                    </div>
              </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Tentang UMKM</label>
                    <div class="col-md-12">
                        <textarea id="summernote" id="deskripsi" name="deskripsi"><?= $value->deskripsi; ?></textarea>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-flat btn-info btn-sm float-right mr-3"><i class="fas fa-check"></i> Update</button>
            </div>
            <hr>
            <small class="ml-3 mb-3"><i>Klik update untuk menyimpan semua pengaturan</i></small>
          </div>
        </div>


      </div>
    </div>
</section>
</form>
</div>
<?php endforeach; ?>




<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- load peta di edit -->
<?php foreach($editUmkm as $key ) : ?>
<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
  curLocation =[<?= $key->latitude; ?>, <?= $key->longitude; ?>]; 
}

var edit_map = L.map('edit_map').setView([<?= $key->latitude; ?>, <?= $key->longitude; ?>], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>,' +
      'UMKM Sulut © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/satellite-v9',
      tileSize: 512,
      zoomOffset: -1
}).addTo(edit_map);

edit_map.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
  draggable:'true'
});

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position,{
  draggable : 'true'
  }).bindPopup(position).update();
  $("#Lat").val(position.lat);
  $("#Long").val(position.lng).keyup();
});

$("#Lat, #Long").change(function(){
  var position =[parseInt($("#Lat").val()), parseInt($("#Long").val())];
  marker.setLatLng(position, {
  draggable : 'true'
  }).bindPopup(position).update();
  edit_map.panTo(position);
});
edit_map.addLayer(marker);

</script>
<?php endforeach; ?>  