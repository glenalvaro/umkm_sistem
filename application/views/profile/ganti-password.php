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
  .input-sm {
    height: 25px;
    width: 200px;
    padding: 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 style="font-size: 18px; font-weight: bold;">
              Ganti Password
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
              <li class="breadcrumb-item active">Ubah password</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

<form class="form-horizontal" action="<?= base_url('user/changepassword'); ?>" method="post">
<section class="content">
  <div class="container-fluid">
    <small><?= $this->session->flashdata('message'); ?></small>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="<?php echo base_url('user/profile'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali Ke Data Profile</a>
            </div>
            <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover tabel-rincian">
              <tbody>
                <tr>
                  <th colspan="3" class="subtitle_head"><strong>CHANGE PASSWORD</strong></th>
                </tr>
                 <tr>
                  <td>Current Password </td><td>:</td>
                  <td>
                      <input type="password" class="form-control input-sm" id="current_password" name="current_password" placeholder="Password lama">
                       <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </td>
                </tr>
                <tr>
                  <td width="300">New Password</td><td width="1">:</td>
                  <td> 
                    <input type="password" id="new_password1" name="new_password1" class="form-control input-sm" placeholder="Password Baru">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </td>
                </tr>
                <tr>
                  <td width="300">Repeat Password</td><td width="1">:</td>
                  <td> 
                    <input type="password" id="new_password2" name="new_password2" class="form-control input-sm" placeholder="Ketik Ulang Password">
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-social btn-flat btn-primary btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</form>
    </section>
</div>




