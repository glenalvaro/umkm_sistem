 <style>
  .pagination {
    font-size: 10px;
  }
</style>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
              Data Pengguna<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Pengguna</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
      <div class="container-fluid">
          <small><?= $this->session->flashdata('message'); ?></small>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div>
                   <a href="<?= base_url('user/add_user'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i>&nbsp; Tambah Data Pengguna</a>
                </div>
              </div>
               <div class="card-body">
                <table id="table2" class="table table-bordered table-striped" width="100%">
                <thead style="background-color: #df6657;color: white">
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Foto</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Group</th>
                  <th class="text-center">Terdaftar</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach($getUser as $s) : ?>
                <tr>
                  <td width="5%" class="text-center"><?= $no++; ?></td>
                   <td class="text-center">
                    <img src="<?= base_url('assets/img/profile/') . $s['foto']; ?>" width="50" height="55">
                    </td>
                    <td><?= $s['nama']; ?></td>
                    <td><?= $s['email']; ?></td>
                    <td class="text-center">
                      <?php 

                      if($s['level'] == 1){
                        echo "Administrator";
                      } else {
                        echo "Author";
                      }
                      ?>
                    </td>
                    <td class="text-center"><?= date('d F Y', $s['date_created']); ?></td>
                    <td width="15%" class="text-center">
                    <!-- Hilangkan aksi untuk admin -->
                      <?php if($s['id'] != 1 ) : ?>
                        <?php if($s['is_active'] == '0') : ?>
                        <a href="<?=site_url('user/user_unlock/'.$s['id'])?>" class="btn bg-navy btn-flat btn-xs"  title="Aktifkan Pengguna"><i class="fa fa-lock">&nbsp;</i></a>
                     
                        <?php elseif($s['is_active'] == '1') : ?>
                        <a href="<?=site_url('user/user_lock/'.$s['id'])?>" class="btn bg-navy btn-flat btn-xs"  title="Non Aktifkan Pengguna"><i class="fa fa-unlock"></i></a>
                      
                       <?php endif; ?>
                        <a onclick="deleteConfirm('<?= site_url("user/hapus_user/"). $s['id']; ?>')"
                        href="#" class="btn btn-danger btn-flat btn-xs"><i class="fas fa-trash"></i></a>
                        <?php endif; ?>
                        <a href="<?= base_url('user/detail_user/').$s['id']; ?>" class="btn btn-info btn-flat btn-xs"><i class="fas fa-eye" title="Lihat Data User"></i></a>

                        <a href="<?= base_url('user/edit_user/').$s['id']; ?>" class="btn btn-success btn-flat btn-xs"><i class="fas fa-edit"></i></a>
                     
                  </td>
                </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--MODAL HAPUS-->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 style="font-size: 15px;" class="modal-title" id="myModalLabel">Hapus Data</h4>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">
                  <input type="hidden" name="kode" id="id_cus" value="">
                  <p style="font-size:14px;">Apakah Anda yakin menghapus data user ini ?</p> 
                </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary btn-flat btn-sm" type="button" data-dismiss="modal">Cancel</button>
                  <a id="btn-hapus" class="btn btn-danger btn-flat btn-sm" href="#">Delete</a>
              </div>
              </form>
          </div>
      </div>
  </div>
<script>
  function deleteConfirm(url){
  $('#btn-hapus').attr('href', url);
  $('#deleteModal').modal();
}
</script>
</section>
</div>