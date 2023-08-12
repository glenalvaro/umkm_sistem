<style>
  .table {
    font-size: 12px;
  }

  .subtitle_head {
    padding: 10px 50px 10px 5px;
    background-color: #a2f2ef;
    margin: 15px 0px 10px 0px;
    margin-top: 15px;
    margin-right: 0px;
    margin-bottom: 10px;
    margin-left: 0px;
    text-align: left;
    color: #111;
  }
</style>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
               <i class="fas fa-wrench"></i>&nbsp; Pengaturan Sistem<small>&nbsp; control panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('setting'); ?>">Setting</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<?php foreach($getsetting as $gs) : ?>
    <section class="content">
      <div class="container-fluid">
        <small><?= $this->session->flashdata('message'); ?></small>
        <div class="row">
          <div class="col-12">
            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <div class="card-header">
                      <a href="<?= base_url('setting/ubah_data/'). $gs['id']; ?>" class="btn btn-social btn-flat btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-edit"></i> Ubah Data
                      </a>
                  </div>
                </div>
              </div>
              <br>

              <div class="row invoice-info">
                <!-- <div class="col-sm-6 invoice-col">
                   <p class="lead">Logo :</p>
                  <center>
                    <img style="width: 110px; height: 105px; margin-top: 50px;" src="<?= base_url('assets/img/') . $gs['logo']; ?>" class="user-image" title="foto">
                   </center>
                    <p style="font-size: 13px; font-weight: bold; text-align: center; margin-top: 12px;">LOGO SISTEM
                    </p>
                </div> -->
                <div class="col-sm-6 invoice-col">
                  <p class="lead">Gambar Slider Website :</p>
                 <div class="card-body">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('assets/img/slider/') . $gs['slider1']; ?>" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('assets/img/slider/') . $gs['slider2']; ?>" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('assets/img/slider/') . $gs['slider3']; ?>" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-custom-icon" aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                          </span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-custom-icon" aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                          </span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                </div>
              </div>
            
               <div class="row">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover tabel-rincian">
                  <tbody>
                    <tr>
                      <th colspan="3" class="subtitle_head"><strong>MANAJEMEN SISTEM</strong></th>
                    </tr>
                    <tr>
                      <td width="200">Nama Sistem</td><td width="1">:</td>
                      <td><?= $gs['nama_sistem']; ?></td>
                    </tr>
                    <tr>
                      <td width="200">Deskripsi</td><td width="1">:</td>
                      <td><?= $gs['deskripsi']; ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td><td>:</td>
                      <td><?= $gs['alamat']; ?></td>
                    </tr>
                    <tr>
                      <th colspan="3" class="subtitle_head"><strong>PROFIL & KONTAK</strong></th>
                    </tr>
                     <tr>
                      <td>E-mail </td><td>:</td>
                      <td><?= $gs['email']; ?></td>
                    </tr>
                     <tr>
                      <td>No Telepon </td><td>:</td>
                      <td><?= $gs['phone']; ?></td>
                    </tr>
                     <tr>
                      <th colspan="3" class="subtitle_head"><strong>WEB SLIDER</strong></th>
                    </tr>
                    <tr>
                      <td>Slider 1 </td><td>:</td>
                      <td><a href="<?= base_url('assets/img/slider/') . $gs['slider1']; ?>" target="_blank"><?= $gs['slider1']; ?></a></td>
                    </tr>
                    <tr>
                      <td>Title </td><td>:</td>
                      <td><?= $gs['title1']; ?></td>
                    </tr>
                    <tr>
                      <td>Deskripsi </td><td>:</td>
                      <td><?= $gs['deskripsi1']; ?></td>
                    </tr>
                    <tr>
                      <td>Slider 2 </td><td>:</td>
                      <td><a href="<?= base_url('assets/img/slider/') . $gs['slider2']; ?>" target="_blank"><?= $gs['slider2']; ?></td>
                    </tr>
                    <tr>
                      <td>Title </td><td>:</td>
                      <td><?= $gs['title2']; ?></td>
                    </tr>
                    <tr>
                      <td>Deskripsi </td><td>:</td>
                      <td><?= $gs['deskripsi2']; ?></td>
                    </tr>
                    <tr>
                      <td>Slider 3 </td><td>:</td>
                      <td><a href="<?= base_url('assets/img/slider/') . $gs['slider3']; ?>" target="_blank"><?= $gs['slider3']; ?></td>
                    </tr>
                    <tr>
                      <td>Title </td><td>:</td>
                      <td><?= $gs['title3']; ?></td>
                    </tr>
                    <tr>
                      <td>Deskripsi </td><td>:</td>
                      <td><?= $gs['deskripsi3']; ?></td>
                    </tr>
                    <tr>
                      <td>Zoom Peta </td><td>:</td>
                      <td><?= $gs['zoom_peta']; ?></td>
                    </tr>
                    <tr>
                      <td>Icon Peta </td><td>:</td>
                      <td><a href="<?= base_url('assets/img/icon/') . $gs['icon_peta']; ?>" target="_blank"><?= $gs['icon_peta']; ?></td>
                    </tr>
                  </tbody>
                 </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
  </div>