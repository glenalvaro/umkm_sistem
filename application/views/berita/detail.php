<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
              Detail Berita<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Berita</a></li>
              <li class="breadcrumb-item active">detail</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<?php foreach($detailBerita as $main) : ?>
<section class="content">
      <div class="card card-solid">
        <div class="card-header">
            <a href="<?php echo base_url('berita'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Data Berita</a>
          </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="<?= base_url('assets/upload/artikel/') . $main->gambar; ?>" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?= $main->judul; ?></h3>
              <p style="font-size: 14px;">
                <i class="fas fa-newspaper"></i>&nbsp; <?= $main->tags; ?>
                &nbsp;&nbsp;&nbsp;
                <i class="fas fa-clock"></i>&nbsp; <?= $main->tgl; ?>
              </p>

              <hr>
              <div class="mt-4 product-share">
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
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?= $main->konten; ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
</div>
