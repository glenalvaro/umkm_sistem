<style>
  .pagination{
    font-size: 13px;
  }
  .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #bb1724;
    border-color: #bb1724;
}
</style> 
<!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">

            <?php foreach($berita->result() as $key) : ?>
            <article class="entry">
              <div class="entry-img">
                <img src="<?= base_url('assets/upload/artikel/') .$key->gambar; ?>" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="<?= base_url('welcome/baca_berita/').$key->id; ?>"><?= $key->judul; ?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-newspaper"></i> <a href="#"><?= $key->tags; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?= $key->tgl; ?></time></a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  <?php echo word_limiter($key->konten, 30); ?>
                </p>
                <div class="read-more">
                  <a href="<?= base_url('welcome/baca_berita/').$key->id; ?>">Baca Selengkapnya<i style="position: relative; top:2px; margin-left:2px;" class='bx bx-right-arrow-alt'></i></a>
                </div>
              </div>
            </article>
            <?php endforeach; ?>

            <!-- Halaman -->
            <div class="row">
                <div class="col">
                  <!--Tampilkan pagination-->
                  <?php echo $halaman; ?>
                </div>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text" class="form-control" placeholder="Masukan Kata Kunci">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Kategori</h3>
              <div class="sidebar-item categories">
                <ul>
                  <?php 
                  $queryTags = "SELECT `tags` FROM `tb_berita`";
                  $tampil = $this->db->query($queryTags)->result_array();
                  ?>
                    <?php foreach($tampil as $row) : ?>
                      <li><a href="#"><?= $row['tags']; ?><span></span></a></li>
                    <?php endforeach; ?>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <?php

                $queryPost = "SELECT * FROM `tb_berita` ORDER BY `tb_berita`.`id` DESC";
                $hasil = $this->db->query($queryPost)->result_array();

                ?>

                <?php foreach($hasil as $p) : ?>
                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/upload/artikel/') .$p['gambar']; ?>" alt="">
                  <h4><a href="<?= base_url('welcome/baca_berita/').$p['id']; ?>"><?= $p['judul']; ?></a></h4>
                  <time datetime="2020-01-01"><?= $p['tgl']; ?></time>
                </div>
                <?php endforeach; ?>
              </div>

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->