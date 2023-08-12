<?php foreach($setting as $sr) : ?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3><?= $sr['nama_sistem']; ?></h3>
            <p>
              <strong>Phone :</strong> <?= $sr['phone']; ?><br>
              <strong>Email :</strong> <?= $sr['email']; ?><br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('welcome') ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lokasi UMKM</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Produk</a></li>
            </ul>
          </div>

          <div class="col-lg-5 col-md-6 footer-newsletter">
            <h4>Cari Produk</h4>
            <p>Cari produk UMKM di Provinsi Sulawesi Utara</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Cari">
            </form>
            <br>
            <h4 style="font-size: 13px;">STATISTIK PENGUNJUNG :</h4>
            <table id="foot-table-list">
            <tr>
               <td>Pengunjung Hari ini</td>
               <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
               <td><?= $pengunjunghariini ?> orang</td>
            </tr>
            <tr>
               <td>Total Pengunjung</td> 
               <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
               <td><?= $totalpengunjung ?> orang</td>
            </tr>
            <tr>
               <td>Pengunjung Online</td>
               <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
               <td><?= $pengunjungonline ?> orang</td>
            </tr>
            </table>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <?= date('Y') ?><strong><span> UMKM Sulut</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

   <script src="<?= base_url(); ?>assets/files/js/jquery.js"></script>

   <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
});
    </script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>assets/files/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url(); ?>assets/files/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>assets/files/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/files/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets/files/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/files/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/files/vendor/php-email-form/validate.js"></script>
  <!-- pace-progress -->
  <script src="<?= base_url() ?>assets/plugins/pace-progress/pace.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>assets/files/js/main.js"></script>
   <script src="<?= base_url(); ?>assets/mode.js"></script>

  <?php endforeach; ?>

<script>
$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
//fungsi disabled & enabled tombol
$("input[type=checkbox]").on( "change", function(evt) {
var data = $('input[id=syarat_daftar]:checked');
if(data.length == 0){
  $("button[name=syarat]").prop("disabled", true);
    }else{
      $("button[name=syarat]").prop("disabled", false);
    }
  });
});
</script>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>

</html>