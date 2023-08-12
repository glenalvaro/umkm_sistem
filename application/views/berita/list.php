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
              Berita Online UMKM<small>&nbsp; Control Panel</small>
             </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
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
                   <a href="<?= base_url('berita/buat_berita'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i>&nbsp; Buat Berita</a>
              </div>
               <div class="card-body">
                <table id="table2" class="table table-bordered table-striped" width="100%">
                 <thead style="background-color: #20c997;color: white">
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Thumbnail</th>
                  <th class="text-center">Judul Berita</th>
                  <th class="text-center">Isi Berita</th>
                  <th class="text-center">Kategori</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach($artikel as $row) : ?>
                <tr>
                  <td width="5%" class="text-center"><?= $no++; ?></td>
                   <td class="text-center">
                    <img src="<?= base_url('assets/upload/artikel/') . $row['gambar']; ?>" width="60" height="40">
                    </td>
                    </td>
                    <td><?= $row['judul']; ?></td>
                    <td><?php echo word_limiter($row['konten'], 20); ?></td>
                    <td><?= $row['tags']; ?></td>
                    <td width="15%" class="text-center">

                        <a href="<?= base_url('berita/lihat_berita/').$row['id'] ?>" class="btn btn-primary btn-flat btn-xs"><i class="fas fa-eye"></i></a>

                        <a href="<?= base_url('berita/edit_berita/').$row['id'] ?>" class="btn btn-success btn-flat btn-xs"><i class="fas fa-edit"></i></a>

                        <a onclick="deleteConfirm('<?= site_url('berita/hapus_berita/').$row['id'] ?>')"
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
                  <p style="font-size: 14px;">Apakah Anda yakin menghapus data ini ?</p> 
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