
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
             Galery Foto UMKM<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">List foto</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 style="font-size:17px;" class="card-title">Galery Foto</h4>
              </div>
              <div class="card-body">
                <div class="row">

                  <?php foreach($UMKM->result() as $row)  : ?>

                  <div class="col-sm-2">
                    <a href="<?= base_url('assets/upload/galery/').$row->nama_foto; ?>" data-toggle="lightbox" data-title="<?= $row->nama_umkm; ?>" data-gallery="gallery">
                      <img src="<?= base_url('assets/upload/galery/').$row->nama_foto; ?>" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>

                <?php endforeach; ?>
              </div>
             <div class="row">
                <div class="col">
                  <!--Tampilkan pagination-->
                  <?php echo $pagination; ?>
                </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>