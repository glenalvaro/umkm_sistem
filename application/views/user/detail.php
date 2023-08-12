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
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="font-size: 20px; font-weight: bold;">
              Detail Data Pengguna<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('user') ?>">Data Penggunan</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
<?php foreach($detailUser as $dt) : ?>
    <section class="content">
      <div class="card">
        <div class="card-header">
           <a href="<?php echo base_url('user'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fas fa-arrow-circle-left"></i>&nbsp; Kembali Ke Manajemen Pengguna</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12">
                  <h4 style="font-size: 18px; font-weight:bold;">Detail Data</h4>
                    <div class="post">
                    </div>
                    <div class="post">
                     <div class="table-responsive">
                     <table class="table table-bordered table-striped table-hover tabel-rincian">
                      <tbody>
                      <tr>
                        <th colspan="3" class="subtitle_head"><strong>DATA USER</strong></th>
                      </tr>
                      <tr>
                        <td width="200">Nama Lengkap</td><td width="1">:</td>
                          <td><?= $dt->nama; ?></td>
                      </tr>
                      <tr>
                        <td>E-mail</td><td>:</td>
                        <td><?= $dt->email; ?></td>
                      </tr>
                      <tr>
                        <td width="200">No Handphone</td><td width="1">:</td>
                        <td><?= $dt->no_hp; ?></td>
                      </tr>
                      <tr>
                        <td width="200">Alamat</td><td width="1">:</td>
                        <td><?= $dt->alamat; ?></td>
                      </tr>
                      <tr>
                        <td>Member Since </td><td>:</td>
                        <td class="text-red"><?= date('d F Y', $dt->date_created); ?></label></td>
                      </tr>
                        </tbody>
                       </table>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 style="font-size: 20px;" class="text-primary"><i class="fas fa-image"></i>&nbsp; Foto</h3>
                <center>
                  <img style="width: 143px; height: 133px; border: 3px solid #ccc;" src="<?= base_url('assets/img/profile/') . $dt->foto; ?>" class="user-image" title="foto">
                </center>
              <br>
              <div class="text-muted">
                <p class="text-sm">Group
                  <b class="d-block">
                    <?php 
                    if($dt->level == 1 ){
                      echo "Administrator";
                    } else {
                      echo "Author";
                    }
                    ?>
                  </b>
                </p>
                <p class="text-sm">Aktif
                  <b class="d-block">
                    <?php 
                    if($dt->is_active == 1 ){
                      echo "Aktif";
                    } else {
                      echo "Tidak Aktif";
                    }
                    ?>
                  </b>
                </p>
              </div>

              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Lihat Toko</a>
                <a href="<?= site_url('user') ?>" class="btn btn-sm btn-warning">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php endforeach; ?>
