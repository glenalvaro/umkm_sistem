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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 18px; font-weight: bold;">
              Profile
             </h1>
          </div>
        </div>
      </div>
    </section>

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<section class="content">
    <div class="container-fluid">

    <small><?= $this->session->flashdata('message'); ?></small>
    
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
               <a href="<?= base_url('user/edit_profile'); ?>" class="btn btn-social btn-flat btn-warning btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-edit"></i> Edit Data Profile</a>

                <a href="<?= base_url('user/changePassword'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-key"></i> Ganti Password</a>
            </div>
            <div class="card-body">
              <p style="font-size: 15px; font-weight: bold; font-family: sans-serif;">PROFIL PENGGUNA 
              </p>
              <br/>
              <center><img style="width: 143px; height: 133px; border: 3px solid #ccc;" src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" class="user-image" title="foto">
              </center>
              <br>      
              <div class="box-header with-border">
              </div>
              <br/>
           <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover tabel-rincian">
              <tbody>
                <tr>
                  <th colspan="3" class="subtitle_head"><strong>DATA USER</strong></th>
                </tr>
                <tr>
                  <td width="200">Group</td><td width="1">:</td>
                  <td>
                   <?php 

                      if($user['level'] == 1){
                        echo "Administrator";
                      } else {
                        echo "Author";
                      }
                      ?>
                  </td>
                </tr>
                <tr>
                  <td width="200">Nama Lengkap</td><td width="1">:</td>
                  <td><?= $user['nama']; ?></td>
                </tr>
                <tr>
                  <td>E-mail</td><td>:</td>
                  <td><?= $user['email']; ?></td>
                </tr>
                <tr>
                  <td width="200">No Handphone</td><td width="1">:</td>
                  <td><?= $user['no_hp']; ?></td>
                </tr>
                <tr>
                  <td width="200">Alamat</td><td width="1">:</td>
                  <td><?= $user['alamat']; ?></td>
                </tr>
                <tr>
                  <td>Member Since </td><td>:</td>
                  <td class="text-red"><?= date('d F Y', $user['date_created']); ?></label></td>
                </tr>
              </tbody>
             </table>
            </div>
           </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  </section>
</div>




