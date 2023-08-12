 <style>
  .pagination {
    font-size: 10px;
  }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
              Data Kategori UMKM<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Kategori</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
      <div class="container-fluid">
    <small><?= form_error('nama_kategori', '<div class="alert alert-danger" role="alert">', '</div>') ?></small>

          <small><?= $this->session->flashdata('message'); ?></small>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div>
                   <a href="" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-toggle="modal" data-target="#new-kategori"><i class="fa fa-plus"></i>&nbsp; Tambah Data Kategori</a>
                </div>
              </div>
               <div class="card-body">
                <table id="table2" class="table table-bordered table-striped" width="100%">
                <thead style="background-color: #20c997;color: white">
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Kategori</th>
                  <th class="text-center">Keterangan</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach($getKategori as $k) : ?>
                <tr>
                  <td width="5%" class="text-center"><?= $no++; ?></td>
                    <td><?= $k['nama_kategori']; ?></td>
                    <td><?= $k['keterangan']; ?></td>
                    <td width="20%" class="text-center">
                      <a href="<?= base_url('kategori/edit_kategori/').$k['id']; ?>" class="btn btn-success btn-flat btn-xs"><i class="fas fa-edit"></i></a>

                      <a onclick="deleteConfirm('<?= site_url('kategori/hapus_kategori/').$k['id'];  ?>')"
                        href="#" class="btn btn-danger btn-flat btn-xs"><i class="fas fa-trash"></i></a>
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


<!-- Tambah data -->
<div class="modal fade" id="new-kategori">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" style="font-size: 15px; font-weight: bold;">Tambah Kategori</h4>
              </div>
              <form action="<?= base_url('kategori'); ?>" method="post">
              <div class="modal-body">
               <div class="form-group">
                <label style="font-size: 13px;">Nama Kategori :</label>
                     <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" value="" placeholder="Enter...">
                </div>

                <div class="form-group">
                <label style="font-size: 13px;">Keterangan :</label>
                     <textarea name="keterangan" class="form-control" placeholder="Jelaskan tentang sektor"></textarea>
                 </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-social btn-flat btn-default btn-sm" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
                <button type="submit" class="btn btn-social btn-flat btn-info btn-sm"  style="float: right;"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
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
                  <p style="font-size: 14px;">Apakah Anda yakin menghapus data user ini ?</p> 
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