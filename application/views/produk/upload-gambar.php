<style>
  .dropzone {
  margin-top: 20px;
  border: 2px dashed #0087F7;
}
 label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    font-size: 12px;
}
.input-sm {
    height: 25px;
    padding: 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
             Upload Gambar UMKM<small>&nbsp; Control Panel</small>
             </h1>
          </div>
        </div>
      </div>
    </section>

<div class="col-12">
        <div class="callout callout-info">
        <h5 style="font-size: 18px;"><i class="fas fa-info"></i> Note:</h5>
              <p style="font-size: 14px;">Gambar yang diupload akan tampil di detail UMKM dan di detail Peta UMKM</p>
      </div>
</div>
 <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 style="font-size:15px;" class="card-title">Tambahkan Gambar Produk UMKM</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
           <?php foreach($uploadDok as $d) : ?>
                
                <input type="hidden" class="form-control input-sm" id="id_umkm" name="id_umkm" value="<?= $d->id; ?>" readonly>
                  

                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama UMKM :</label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control input-sm" id="nama_umkm" name="nama_umkm" value="<?= $d->nama_usaha; ?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Kategori :</label>
                    <div class="col-sm-11">
                      <input type="text" class="form-control input-sm" id="kategori" name="kategori" value="<?= $d->kategori; ?>" readonly>
                    </div>
                </div>

          <?php endforeach; ?>

            <br>
            <div class="dropzone">
              <div class="dz-message">
               <h3 style="font-size: 22px;"> Klik atau Drop gambar disini</h3>
              </div>
            </div>
            <br>
            <div class="col-12">
              <a href="<?= base_url('produk'); ?>" class="btn btn-info btn-flat btn-sm float-sm-right"><i class="fas fa-arrow-circle-left">
              </i>&nbsp; Kembali</a>
            </div>
        </div>
      </div>
    </section>
  </div>



<!-- dropzonejs -->
<script src="<?= base_url() ?>assets/plugins/dropzone/min/dropzone.min.js"></script>

<script>

Dropzone.autoDiscover = false;
var foto_upload=new Dropzone(".dropzone",{
url: "<?= base_url('produk/proses_upload') ?>",
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
  a.token=Math.random();
  c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});

foto_upload.on("sending", function(file, xhr, formData) {
      //Add additional data to the upload
      formData.append('id_umkm', $('#id_umkm').val());  
      formData.append('nama_umkm', $('#nama_umkm').val());   
      formData.append('kategori', $('#kategori').val());     
    });

//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
  var token=a.token;
  $.ajax({
    type:"post",
    data:{token:token},
    url:"<?php echo base_url('produk/remove_foto') ?>",
    cache:false,
    dataType: 'json',
    success: function(){
      console.log("Foto terhapus");
    },
    error: function(){
      console.log("Error");

    }
  });
});
</script>

