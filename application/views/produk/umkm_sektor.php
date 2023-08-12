<style>
  .input-sm {
    height: 35px;
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
              Lokasi Persebaran UMKM<small>&nbsp; Filter</small>
             </h1>
          </div>
        </div>
      </div>
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <div class="card-header">
                    <h4 style="font-size: 18px; font-weight:bold;">
                     Persebaran UMKM Per Sektor di Provinsi Sulut
                    <small class="float-right">Update :&nbsp; <?php echo date("d M Y"); ?></small>
                    </h4>
                  </div>
                  <br>
                  <h4 style="font-size:16px; font-weight: bold;">Semua Sektor</h4>
                </div>
                <!-- Filter data -->
                  <div id="form" class="col-md-8">
                    <?php foreach($Kat_Umkm as $row) : ?>
                        &nbsp;<input type="checkbox" class="checkbox-inline" id="cb<?=$row['nama_kategori']?>" checked> 
                        &nbsp;<?=$row['nama_kategori']?>
                    <?php endforeach; ?>
                  </div>
                  <!-- cari data -->
                    <div class="col-md-12 mt-3">
                      <button id="btnForm" class="btn btn-info btn-sm btn-flat"><small><i class="fa fa-search"></i></small> &nbsp;Filter</button>
                    </div>
                  <!-- End filter -->
              </div>
              <br>
          
              <div id="map_sektor" style="height: 600px;"></div>

            </div>
          </div>
        </div>
      </div>
    </section>
</div>






<?php foreach($setting as $se ) : ?>
<script>

  let myJSON=[
  <?php foreach($Sektor_Umkm as $sek) : ?>

     {
       lat:<?= $sek['latitude'] ?>,
       lon:<?= $sek['longitude'] ?>,
       np:['<?= $sek['nama_pemilik'] ?>'],
       nu:['<?= $sek['nama_usaha'] ?>'],
       kat:['<?= $sek['kategori'] ?>'],
       al:['<?= $sek['alamat'] ?>'],
       hp:['<?= $sek['no_hp'] ?>'],
       gb:["<center><img width='155px' height='105px' src='<?= base_url('assets/upload/') . $sek['gambar']; ?>'</center>"]

     },
  <?php endforeach; ?>
   ]

  var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' +
      'UMKM Sulut © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
   tileSize: 512,
    zoomOffset: -1
  });

var map = L.map('map_sektor', {
    center: [1.4765207109253582, 124.79768921967322],
    zoom: 10,
    layers: [peta1]
});

let myMarkers = L.featureGroup().addTo(map);

filter();
btnForm.onclick=()=>filter();

function filter() {

  myMarkers.clearLayers();

  let myJSONcopy = JSON.parse(JSON.stringify(myJSON));

  let categories=[];
  
  <?php foreach($Sektor_Umkm as $k) : ?>
  if (cb<?= $k['kategori'] ?>.checked) {
    categories.push('<?=$k['kategori']?>');
  }
  <?php endforeach; ?>

  //looping data
    for (let i=0;i<myJSONcopy.length;i++){
    for (let j=0;j<categories.length;j++){
    for (let k=0;k<myJSONcopy[i].kat.length;k++)
    for (let n=0;n<myJSONcopy[i].nu.length;n++)
    for (let p=0;p<myJSONcopy[i].np.length;p++)
    for (let a=0;a<myJSONcopy[i].al.length;a++)
    for (let t=0;t<myJSONcopy[i].hp.length;t++)
    for (let g=0;g<myJSONcopy[i].gb.length;g++)

  //buat kondisi
    if (categories[j]==myJSONcopy[i].kat[k] && !myJSONcopy[i].added){
      L.marker([myJSONcopy[i].lat,myJSONcopy[i].lon]).addTo(myMarkers)
      .bindPopup(
          "<b>Nama UMKM : </b>" + myJSONcopy[i].nu[n] + "</br>" + 
          "Sektor : " + myJSONcopy[i].kat[k] + "</br>" +
          "Pemilik : " + myJSONcopy[i].np[p] + "</br>" +
          "Alamat : " + myJSONcopy[i].al[a] + "</br>" +
          "Telepon : " + myJSONcopy[i].hp[t] + "</br></br>" +
          " " + myJSONcopy[i].gb[g]  + "</br>"
        );
        myJSONcopy[i].added=true;
        break;
      }
    }
  }
}

</script>
<?php endforeach; ?>



