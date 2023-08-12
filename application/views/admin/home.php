<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1 style="font-size: 20px; font-weight: bold;">
              Dashboard
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div>
    </div>


<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $total_umkm; ?></h3>

                <p>UMKM</p>
              </div>
              <div class="icon">
                <i class="bx bx-store"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $total_sektor; ?><sup style="font-size: 20px"></sup></h3>

                <p>Sektor</p>
              </div>
              <div class="icon">
                <i class="bx bx-news"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $total_user; ?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="bx bx-user"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_gambar; ?></h3>

                <p>Galery</p>
              </div>
              <div class="icon">
                <i class="bx bx-image"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

      <div class="col-md-6">
        <div class="card">
              <div class="card-header">
                <h3 style="font-size: 12px; font-weight:bold;" class="card-title">SEKTOR TERDAFTAR</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="Mygrafik" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
            </div>
          </div>
  </div>