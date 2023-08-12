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
</style>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 18px; font-weight: bold;">
              Tambah UMKM
             </h1>
          </div>
        </div>
      </div>
    </section>

<form class="form-horizontal" action="<?= base_url('produk/add_produk'); ?>" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="card">
              <div class="card-header d-flex p-0">
                <ul style="font-size:13px;" class="nav nav-pills ml-auto p-2">
                  <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Geser Lokasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">GPS</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div id="dragpeta" style="height: 350px;"></div>
                          <p><small><i>Geser icon untuk mendapatkan data lokasi anda.</i></small></p>
                  </div>
                  <div class="tab-pane" id="tab_2">
                      <div id="mapid" style="height: 350px;"></div>
                          <p><small><i>Klik <u>tombol lokasi saya</u> untuk mendapatkan data lokasi anda.</i></small></p>
                    <button type="button" class="btn btn-danger btn-flat btn-xs float-sm-left" onclick="getLokasi()"><i class="fas fa-map-pin"></i>&nbsp; Lokasi Saya</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-7">
            <div class="card">
              <div class="card-header">
               <h3 style="font-size:15px;" class="card-title">Identitas</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama :</label>
                    <div class="col-sm-11">
                      <input type="hidden" id="email" name="email" class="form-control input-sm" value="<?= $user['email']; ?>" readonly>
                      <input type="text" id="nama_pemilik" name="nama_pemilik" class="form-control input-sm" value="<?= $user['nama']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat :</label>
                    <div class="col-sm-11">
                      <input type="text" id="alamat" name="alamat" class="form-control input-sm" value="<?= $user['alamat']; ?>">
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">No Handphone :</label>
                    <div class="col-sm-11">
                      <input type="text" id="no_hp" name="no_hp" class="form-control input-sm" value="<?= $user['no_hp']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Latitude :</label>
                    <div class="col-sm-8">
                      <input type="text" id="Latitude" name="latitude" class="form-control input-sm" readonly>
                        <p style="font-size:12px; font-style: italic;" class="text-red">* Latitude dan longitude adalah koordinat tempat umkm anda</p>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Longitude :</label>
                    <div class="col-sm-8">
                      <input type="text" id="Longitude" name="longitude" class="form-control input-sm" readonly>
                    </div>
                  </div>

              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 style="font-size:15px;" class="card-title">Form Data UMKM</h3>
              </div>
                <div class="card-body">
                 <a href="<?php echo base_url('produk'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Data UMKM</a>
                 <br>
                 <br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Usaha UMKM :</label>
                    <div class="col-sm-11">
                      <input type="hidden" name="tgl_posting">
                      <input type="text" id="nama_usaha" name="nama_usaha" class="form-control input-sm" placeholder="Enter" value="<?= set_value('nama_usaha'); ?>">
                    </div>
                     <?= form_error('nama_usaha', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Tentang UMKM :</label>
                    <div class="col-sm-11">
                       <textarea id="summernote" id="deskripsi" name="deskripsi" placeholder="Enter Text"></textarea>
                    </div>
                    <small><i>Anda bisa menambahkan video youtube</i></small>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Kategori UMKM:</label>
                    <div class="col-sm-11">
                     <select id="kategori" name="kategori" class="form-control select2 input-sm">
                       <option disabled selected>--Pilih Kategori--</option>
                          <?php foreach($listKategori as $lk) :  ?>
                            <option value="<?= $lk['nama_kategori']; ?>"><?= $lk['nama_kategori']; ?></option>
                          <?php endforeach;  ?>
                     </select>
                    </div>
                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Provinsi :</label>
                    <div class="col-sm-8">
                       <input type="text" id="provinsi" name="provinsi" class="form-control input-sm" placeholder="Enter" value="<?= set_value('provinsi'); ?>">
                    </div>
                    <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kabupaten/Kota :</label>
                    <div class="col-sm-8">
                      <select id="kabupaten" name="kabupaten" class="form-control input-sm select2">
                          <option disabled selected>--Pilih--</option>
                          <option value="Kab Bolaang Mongondow">Kabupaten Bolaang Mongondow</option>
                          <option value="Kab Bolaang Mongondow Selatan">Kabupaten Bolaang Mongondow Selatan</option>
                          <option value="Kab Bolaang Mongondow Timur">Kabupaten Bolaang Mongondow Timur</option>
                          <option value="Kab Bolaang Mongondow Utara">Kabupaten Bolaang Mongondow Utara</option>
                          <option value="Kab Kep.Talaud">Kabupaten Kepulauan Talaud</option>
                          <option value="Kab Kep.Sangihe">Kabupaten Kepulauan Sangihe</option>
                          <option value="Kab Kep.Sitaro">Kabupaten Kepulauan Siau Tagulandang Biaro</option>
                          <option value="Kab Minahasa">Kabupaten Minahasa</option>
                          <option value="Kab Minahasa Tenggara">Kabupaten Minahasa Tenggara</option>
                          <option value="Kab Minahasa Utara">Kabupaten Minahasa Utara</option>
                          <option value="Kab Minahasa Selatan">Kabupaten Minahasa Selatan</option>
                          <option value="Kota Bitung"> Kota Bitung</option>
                          <option value="Kota Kotamobagu">Kota Kotamobagu</option>
                          <option value="Kota Manado">Kota Manado</option>
                          <option value="Kota Tomohon">Kota Tomohon</option>
                      </select>
                    </div>
                    <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kecamatan :</label>
                    <div class="col-sm-8">
                      <input type="text" id="kecamatan" name="kecamatan" class="form-control input-sm" placeholder="Enter" value="<?= set_value('kecamatan'); ?>">
                    </div>
                    <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-3 control-label">Kelurahan/Desa :</label>
                    <div class="col-sm-8">
                     <input type="text" id="kelurahan" name="kelurahan" class="form-control input-sm" placeholder="Enter" value="<?= set_value('kelurahan'); ?>">
                    </div>
                    <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Pos :</label>
                    <div class="col-sm-4">
                      <input type="text" id="kode_pos" name="kode_pos" class="form-control input-sm" placeholder="Enter" value="<?= set_value('kode_pos'); ?>">
                    </div>
                    <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Gambar Produk :</label>
                    <div class="col-sm-8">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Upload Gambar</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-info btn-flat btn-sm float-sm-right"><i class="fas fa-check">
                    </i>&nbsp; Simpan</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
</div>





