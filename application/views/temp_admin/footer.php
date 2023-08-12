
<?php foreach($setting as $sw) : ?>
  <footer class="main-footer">
    Copyright &copy; <?= date('Y'); ?> <strong><?= $sw['nama_sistem']; ?></strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
<?php endforeach; ?>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- pace-progress -->
<script src="<?= base_url() ?>assets/plugins/pace-progress/pace.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- input mask -->
<script src="<?= base_url() ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Ekko Lightbox -->
<script src="<?= base_url() ?>assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#table1").DataTable({
      "responsive": true, "ordering": false, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#table2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- Select2 -->
<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
});

 $(function () {

  //mask phone number
    $('[data-mask]').inputmask()


  $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });

  });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote({
      height : 200
    })
  });
</script>

<!-- Function galery foto -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  })
</script>

<!-- Load peta 2 di add produk -->
<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
  curLocation =[1.475362,124.844562]; 
}

var mymap = L.map('dragpeta').setView([1.4841887,124.8452627], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>,' +
      'UMKM Sulut © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/satellite-v9',
      tileSize: 512,
      zoomOffset: -1
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
  draggable:'true'
});

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position,{
  draggable : 'true'
  }).bindPopup(position).update();
  $("#Latitude").val(position.lat);
  $("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function(){
  var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
  marker.setLatLng(position, {
  draggable : 'true'
  }).bindPopup(position).update();
  mymap.panTo(position);
});
mymap.addLayer(marker);

</script>

<!-- Load peta 1 add produk -->
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
var mymap = new mapboxgl.Map({
  container: 'mapid',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [124.841808, 1.476289],
  zoom: 14
});
//var tanda = new mapboxgl.Marker().setLngLat([124.841808, 1.476289]).addTo(mymap);

// fungsi saat button get lokasi diklik sistem akan menampilkan lokasi dari user
function getLokasi(){
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(lokasiku);
  } else {
    x.innerHTML = "Browser tidak support untuk mendapatkan data lokasi anda.";
  }
}

//mendaptakan data koordinat user
function lokasiku(position){
  var lintang = position.coords.latitude;
  var bujur = position.coords.longitude;
  mymap.flyTo({
    center: [bujur,lintang],
    zoom: 13
  });
  var tanda = new mapboxgl.Marker().setLngLat([bujur,lintang]).addTo(mymap);
  //menampilkan kordinat di inputan
  $('#Latitude').val([lintang]);
  $('#Longitude').val([bujur]);
}
</script>

 <!-- AMBIL DATA DARI TABLE DATA UMKM -->
<?php
      //Inisialisasi nilai variabel awal
    $kon = mysqli_connect("localhost","root","","umkm_sulut");
    $nama_sektor= "";
    $jumlah=null;
    //Query SQL
    $sql="select kategori,COUNT(*) as 'total' from tb_produk GROUP by kategori";
    $hasil=mysqli_query($kon,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
    //Mengambil nilai jurusan dari database
    $kat=$data['kategori'];
    $nama_sektor .= "'$kat'". ", ";
    //Mengambil nilai total dari database
    $jum=$data['total'];
    $jumlah .= "$jum". ", ";

}
?> 

<!-- BAR CHART DAFTAR SEKTOR TERBANYAK-->
<script>
var xValues = [<?= $nama_sektor; ?>];
var yValues = [<?= $jumlah; ?>];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("Mygrafik", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Sektor pendaftar terbanyak"
    }
  }
});
</script>

<script>
$(document).ready(function(){
    $("#load-web").hide();
});
</script>

</body>
</html>
