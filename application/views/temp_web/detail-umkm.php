<main id="main">
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
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="font-size: 18px;">UMKM Details</h2>
          <ol>
            <li><a href="<?= base_url('welcome') ?>">Home</a></li>
            <li><a href="#">UMKM</a></li>
            <li>Detail UMKM</li>
          </ol>
        </div>

      </div>
    </section>

<?php foreach($dataUmkm as $dt) : ?>
<section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-6">
              <h3 style="font-size:18px;">Foto UMKM</h3>
              <br>
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <?php foreach($FotoUmkm as $row) : ?>

                <div class="swiper-slide">
                  <img src="<?= base_url('assets/upload/galery/').$row['nama_foto'] ?>" alt="">
                </div>

                <?php endforeach; ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="portfolio-description">
              <h2 style="font-size: 18px;">Tentang UMKM</h2>
              <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <?= $dt->deskripsi; ?>
                </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3 style="font-size:14px;">Data UMKM</h3>
                <div class="form-group">
                    <label class="control-label">Nama Pemilik </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->nama_pemilik; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                 <div class="form-group">
                    <label class="control-label">Nama UMKM </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->nama_usaha; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                 <div class="form-group">
                    <label class="control-label">Alamat </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->alamat; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                 <div class="form-group">
                    <label class="control-label">No Handphone </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->no_hp; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                 <div class="form-group">
                    <label class="control-label">Sektor </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->kategori; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                <div class="form-group">
                    <label class="control-label">Kelurahan/Desa </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->kelurahan; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                <div class="form-group">
                    <label class="control-label">Kabupaten/kota</label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->kabupaten; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                <div class="form-group">
                    <label class="control-label">Provinsi </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->provinsi; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>

                <div class="form-group">
                    <label class="control-label">Kode Pos </label>
                      <input type="text" class="form-control input-sm" value="<?= $dt->kode_pos; ?>" style="width: 100%; margin-left: 6px; margin-bottom: 4px;" readonly>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  <?php endforeach;  ?>
  </main>



  