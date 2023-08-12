<style>
  .peta-layout{
    position: absolute;
    top: 10px;
    left: 65px;
    z-index: 1000;
    background: #fff;
    padding: 10px 20px;
  }
  .peta-layout h2{
    padding: 0;
    margin: 0;
    font-family: 'Roboto', sans-serif;
  }
   .peta-filter{
    position: absolute;
    top: 55px;
    left: 65px;
    z-index: 1000;
    background: #fff;
    padding: 5px 10px;
  }
   .peta-filter i{
    padding: 0;
    margin: 0;
    color: black;
  }
</style>
<?php foreach($setting as $row) : ?>
<!-- ======= Web Slide Header ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('<?= base_url('assets/img/slider/') . $row['slider1']; ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><span><?= $row['title1']; ?></span></h2>
                <p class="animate__animated animate__fadeInUp"><?= $row['deskripsi1']; ?></p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('<?= base_url('assets/img/slider/') . $row['slider2']; ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?= $row['title2']; ?></h2>
                <p class="animate__animated animate__fadeInUp"><?= $row['deskripsi2']; ?></p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('<?= base_url('assets/img/slider/') . $row['slider3']; ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?= $row['title3']; ?></h2>
                <p class="animate__animated animate__fadeInUp"><?= $row['deskripsi3']; ?></p>
                <a href="<?= base_url('auth/daftar'); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto"> Daftar Sekarang</a>
              </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
</section>

<main id="main">
<!-- ======= About Us UMKM ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="<?= base_url('assets/img/slider/') . $row['slider3']; ?>" class="img-fluid" alt="">
            <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title">
              <h2 style="font-size: 27px; font-weight: bold;">Tentang UMKM</h2>
              <p><?= $row['deskripsi']; ?></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-globe"></i></div>
              <h4 class="title"><a href="https://sulutprov.go.id" target="_blank">website pemerintahan</a></h4>
              <p class="description">Sulawesi Utara adalah salah satu provinsi yang terletak di ujung utara Pulau Sulawesi, Indonesia, dengan ibu kota terletak di kota Manado</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxs-building"></i></div>
              <h4 class="title"><a href="https://diskopukm.sulutprov.go.id" target="_blank">dinas koperasi sulut</a></h4>
              <p class="description">Pendataan dengan cara Koperasi dan UMKM melakukan pendaftaran baik langsung di Kantor Dinas Koperasi UMKM, maupun melalui online</p>
            </div>
          </div>
        </div>
      </div>
</section>

<!-- ======= Data UMKM ======= -->
<section class="counts section-bg">
    <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah_umkm; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>TOTAL UMKM</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah_sektor; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>TOTAL SEKTOR</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah_user; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>USER TERDAFTAR</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah_gambar; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>GALERI UMKM</p>
            </div>
          </div>
        </div>
      </div>
</section>

<!-- ======= Data Sektor ======= -->
<section id="kategori" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size: 20px; font-weight: bold;">SEKTOR UMKM</h2>
          <center><hr style="width: 6%;"></center>
        </div>

        <div class="row">
          <?php foreach($ambilSektor as $us ) : ?>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bx bx-store"></i></div>
            <h4 class="title"><a href="#"><?= $us['nama_kategori'] ?></a></h4>
            <p class="description"><?= $us['keterangan'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
</section>

<!-- ======= Data UMKM ======= -->
<section id="umkm" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
          <h2 style="font-size: 20px; font-weight: bold;">DATA UMKM</h2>
          <center><hr style="width: 6%;"></center>
        </div>

         <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua Sektor</li>
              <?php foreach($ambilSektor as $m) : ?>
                <li data-filter=".<?= $m['nama_kategori'] ?>"><?= $m['nama_kategori'] ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
 
        <div class="row portfolio-container">
          <?php foreach($ambilUmkm as $main) : ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?= $main['kategori'] ?>">
            <div class="portfolio-wrap">
              <img style="height:250px; width: 420px;" src="<?= base_url('assets/upload/'). $main['gambar'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="<?= base_url('assets/upload/'). $main['gambar'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<b>Nama UMKM :</b> <?= $main['nama_usaha']; ?><br>
                    Pemilik UMKM : <?= $main['nama_pemilik']; ?><br>
                    Sektor : <?= $main['kategori']; ?><br>
                    Alamat : <?= $main['alamat']; ?><br>
                    Nomor Handphone : <?= $main['no_hp']; ?>">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
            <?php endforeach; ?>
        </div>
      </div>
</section>

<!-- ======= Lokasi UMKM ======= -->
  <section id="lokasi" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="font-size: 20px; font-weight: bold;">LOKASI UMKM</h2>
          <center><hr style="width: 6%;"></center>
          <p>Lokasi usaha kecil menengah mikro yang tersebar di Provinsi Sulawesi Utara</p>
        </div>
        <div class="row">
        <div class="col-lg-12 faq-item" data-aos="fade-up">
          <!-- tampilkan peta -->
          <div class="peta-layout">
            <h2 style="font-size:15px; color: black;">WebGIS Usaha Kecil Menengah Mikro SULUT</h2>
          </div>
          <div class="peta-filter">
            <i class="bx bx-filter-alt" data-bs-toggle="collapse" href="#collapseSektor" role="button" aria-expanded="false" aria-controls="collapseExample"></i>

            <div class="collapse" id="collapseSektor">
              <div class="card card-body">
                  <h4 style="font-weight: bold; font-size: 12px; color: black;">FILTER SEKTOR UMKM</h4>
                  <?php foreach($ambilSektor as $f) : ?>
                <div style="margin-left: 10px;" class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="ck<?=$f['nama_kategori']?>" checked>
                  <label class="form-check-label" for="flexCheckChecked"> 
                        <p style="color: black;"><?=$f['nama_kategori']?></p>
                  </label>
                </div>
                  <?php endforeach; ?>
                  <br>
                  <div class="d-grid gap-2 d-md-block">
                    <button id="btnCek" style="font-size:12px;" class="btn btn-outline-danger btn-sm btn-flat" type="button">Filter</button>
                  </div>
              </div>
            </div>

          </div>
          <div id="map_front" style="height:520px;"></div>
        </div>
        </div>
      </div>
  </section>

<!-- ======= Data Per Kabupaten/ Kota ======= -->
<section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
           <h2 style="font-size: 20px; font-weight: bold;">DATA UMKM KABUPATEN/KOTA SULUT</h2>
           <center><hr style="width: 6%;"></center>
        </div>

        <div class="row d-flex align-items-stretch">
          <div class="col-lg-3 faq-item" data-aos="fade-up">
            <div class="info">
              <div class="logo">
                <img src="<?= base_url(); ?>assets/img/kab_kota/manado.png">
                <h4>Kota Manado</h4>
                <p><?= $manado ?> &nbsp;UMKM Terdaftar</p>
              </div>

              <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/kotamobagu.jpg">
                <h4>Kota Kotamobagu</h4>
                <p><?= $kotamobagu ?> &nbsp; UMKM Terdaftar</p>
              </div>

              <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/minut.png">
                <h4>Kab Minahasa Utara</h4>
                <p><?= $minut ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/minsel.png">
                <h4>Kab Minahasa Selatan</h4>
                <p><?= $minsel ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/talaud.jpg">
                <h4>Kab Kep.Talaud</h4>
                <p><?= $talaud ?> &nbsp; UMKM Terdaftar</p>
              </div>

              <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/sitaro.jpg">
                <h4>Kab Kep.Siau Tagulandang Biaro</h4>
                <p><?= $sitaro ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/bolmut.jpg">
                <h4>Kab Bolaang Mongondow Utara</h4>
                <p><?= $bolmut ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/bolmong.png">
                <h4>Kab Bolaang Mongondow</h4>
                <p><?= $bolmong ?> &nbsp; UMKM Terdaftar</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 faq-item" data-aos="fade-up">
            <div class="info">
              <div class="logo">
                <img src="<?= base_url(); ?>assets/img/kab_kota/tomohon.png">
                <h4>Kota Tomohon</h4>
                <p><?= $tomohon ?> &nbsp; UMKM Terdaftar</p>
              </div>

              <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/bitung.png">
                <h4>Kota Bitung</h4>
                <p><?= $bitung ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/mitra.jpg">
                <h4>Kab Minahasa Tenggara</h4>
                <p><?= $mitra ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/minahasa.jpeg">
                <h4>Kab Minahasa</h4>
                <p><?= $minahasa ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/sangihe.jpeg">
                <h4>Kab Kep.Sangihe</h4>
                <p><?= $sangihe ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/boltim.jpg">
                <h4>Kab Bolaang Mongondow Timur</h4>
                <p><?= $boltim ?> &nbsp; UMKM Terdaftar</p>
              </div>

               <div class="logo mt-4">
                <img src="<?= base_url(); ?>assets/img/kab_kota/bolsel.jpg">
                <h4>Kab Bolaang Mongondow Selatan</h4>
               <p><?= $bolsel ?> &nbsp; UMKM Terdaftar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
           <center><img style="max-width:60%;" src="<?= base_url(); ?>assets/img/info1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"></center>
          </div>

        </div>
      </div>
    </section>

<!-- ======= INFO UMKM ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">
       <div class="section-title">
           <h2 style="font-size: 20px; font-weight: bold;">Download</h2>
           <center><hr style="width: 6%;"></center>
        </div>

        <div class="row">
          <div class="col-lg-7">
              <h3 style="font-size:18px; font-weight: bold;">Download UMKM Mobile</h3>
              <p style="font-size:14px;" class="mt-4">Aplikasi UKM Mobile kini sudah tersedia di Playstore / Appstore. Anda dapat mendaftarkan usaha anda secara cepat, mudah dan efisien dengan satu kali klik. Ayo download sekarang juga !</p>

            <a href="https://drive.google.com/uc?export=download&id=18H9I3lA4sWO9sDvonHbTK_NQmrSJoL26"><img style="max-width: 20%; margin-top: -30px;" src="<?= base_url(); ?>assets/img/download/gplay.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"></a>
            <img style="max-width: 20%; margin-top: -30px;" src="<?= base_url(); ?>assets/img/download/appstore.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in">
          </div>
         
          <div class="col-lg-5 faq-item" data-aos="fade-up" data-aos-delay="100">
           <center><img style="max-width: 45%" src="<?= base_url(); ?>assets/img/phone.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"></center>
          </div>
          
        </div>
      </div>
    </section>
</main>



<script>
  //ambil kordinat untuk rute
  navigator.geolocation.getCurrentPosition(function(location) {
  var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

  let myJSON=[
  <?php foreach($ambilUmkm as $au) : ?>

     {
       lat:<?= $au['latitude'] ?>,
       lon:<?= $au['longitude'] ?>,
       np:['<?= $au['nama_pemilik'] ?>'],
       nu:['<?= $au['nama_usaha'] ?>'],
       kat:['<?= $au['kategori'] ?>'],
       al:['<?= $au['alamat'] ?>'],
       hp:['<?= $au['no_hp'] ?>'],
       gb:["<center><img width='155px' height='105px' src='<?= base_url('assets/upload/') . $au['gambar']; ?>'</center>"],
       detail:["<a class='btn btn-flat btn-sm btn-info' style='float:left;' href='<?= base_url('welcome/lihat_umkm/').$au['id'] ?>'><small style='color: #fff;'>Detail</small></a>"],
       rute:["<a href='https://www.google.com/maps/dir/?api=1&origin=" +
        location.coords.latitude + "," + location.coords.longitude + "&destination=<?= $au['latitude'] ?>,<?= $au['longitude'] ?>' class='btn btn-flat btn-sm btn-danger' style='float:right; display:block;' target='_blank'><small style='color: #fff;'>Rute</small></a>"]

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

var map = L.map('map_front', {
    center: [1.4765207109253582, 124.79768921967322],
    zoom: <?= $row['zoom_peta'] ?>,
    layers: [peta1]
});

var icon_umkm = L.icon({
    iconUrl: '<?= base_url('assets/img/icon/').$row['icon_peta']; ?>',
    iconSize: [30, 37], 
});


let myMarkers = L.featureGroup().addTo(map);

filter();
btnCek.onclick=()=>filter();

function filter() {

  myMarkers.clearLayers();

  let myJSONcopy = JSON.parse(JSON.stringify(myJSON));

  let categories=[];
  
  <?php foreach($ambilUmkm as $d) : ?>
  if (ck<?= $d['kategori'] ?>.checked) {
    categories.push('<?=$d['kategori']?>');
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
    for (let d=0;d<myJSONcopy[i].detail.length;d++)
    for (let r=0;r<myJSONcopy[i].rute.length;r++)

  //buat kondisi
    if (categories[j]==myJSONcopy[i].kat[k] && !myJSONcopy[i].added){
      L.marker([myJSONcopy[i].lat,myJSONcopy[i].lon], {icon:icon_umkm}).addTo(myMarkers)
      .bindPopup(
          "<b>Nama UMKM : </b>" + myJSONcopy[i].nu[n] + "</br>" + 
          "Sektor : " + myJSONcopy[i].kat[k] + "</br>" +
          "Pemilik : " + myJSONcopy[i].np[p] + "</br>" +
          "Alamat : " + myJSONcopy[i].al[a] + "</br>" +
          "Telepon : " + myJSONcopy[i].hp[t] + "</br></br>" +
          " " + myJSONcopy[i].gb[g]  + "</br></br>" +
          " " + myJSONcopy[i].detail[d]  + " " +
          " " + myJSONcopy[i].rute[r]  + "</br></br>"
        );
        myJSONcopy[i].added=true;
        break;
      }
    }
  }
}

});

</script>

<?php endforeach; ?>


