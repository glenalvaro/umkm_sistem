<!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2 style="font-size: 20px; font-weight: bold;">GALERY UMKM</h2>
          <center><hr style="width: 6%;"></center>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua Sektor</li>
              <?php foreach($dataSektor as $main) : ?>
                <li data-filter=".<?= $main['nama_kategori'] ?>">Sektor <?= $main['nama_kategori'] ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        <?php foreach($fotoUmkm as $data) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?= $data['kategori'] ?>">
            <div class="portfolio-wrap">
              <img src="<?= base_url('assets/upload/galery/'). $data['nama_foto']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $data['nama_umkm'] ?></h4>
                <p><?= $data['kategori'] ?></p>
                <div class="portfolio-links">
                  <a href="<?= base_url('assets/upload/galery/'). $data['nama_foto']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $data['nama_umkm'] ?>"><i class="bi bi-plus"></i></a>
                  <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        </div>
      </div>
    </section>