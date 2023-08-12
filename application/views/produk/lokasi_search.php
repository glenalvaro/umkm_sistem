<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-size: 20px; font-weight: bold;">
              Lokasi Persebaran UMKM<small>&nbsp; Control search</small>
             </h1>
          </div>
        </div>
      </div>
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
             Cari Berdasarkan Nama UMKM
            </div>
            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <div class="card-header">
                    <h4 style="font-size: 18px; font-weight:bold;">
                    <i class="fas fa-globe"></i>&nbsp; Persebaran UMKM Provinsi Sulut
                    <small class="float-right">Update :&nbsp; <?php echo date("d M Y"); ?></small>
                  </h4>
                  </div>
                </div>
              </div>
              <br>
              
              <div id="cari" style="height: 560px;"></div>

            </div>
          </div>
        </div>
      </div>
    </section>
</div>






<script>

  //sample data values for populate map
  var data = [
   <?php foreach($umkmList as $i) : ?>

    {"loc":[<?= $i['latitude'] ?>,<?= $i['longitude'] ?>], "nama_pemilik": "<?= $i['nama_pemilik'] ?>",
    "nama_usaha" : "<?= $i['nama_usaha'] ?>"},

   <?php endforeach; ?>
  ];

  var map = new L.Map('cari', {zoom: 9, center: new L.latLng(data[0].loc) });  //set center from first location

  map.addLayer(new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));  //base layer

  var markersLayer = new L.LayerGroup();  //layer contain searched elements
  
  map.addLayer(markersLayer);

  var controlSearch = new L.Control.Search({
    position:'topright',    
    layer: markersLayer,
    initial: false,
    zoom: 12,
    marker: false
  });

  map.addControl( controlSearch );

  ////////////populate map with markers from sample data
  for(i in data) {
    var nama_usaha = data[i].nama_usaha;
    var loc = data[i].loc,        //position found
    marker = new L.Marker(new L.latLng(loc), {title: nama_usaha} );//se property searched
    marker.bindPopup('Nama UMKM : '+ nama_usaha );
    markersLayer.addLayer(marker);
  }

</script>