
<?php foreach($lihatBerita as $data) : ?>
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">
              <div class="entry-img">
                <img src="<?= base_url('assets/upload/artikel/') .$data->gambar; ?>" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="#"><?= $data->judul; ?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-newspaper"></i> <a href="#"><?= $data->tags; ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?= $data->tgl; ?></time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?= $data->konten; ?>
                </p>
              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>
            </article>

            <div class="blog-comments">
              <h4 class="comments-count">2 Comments</h4>
              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                      Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                  </div>
                </div>
              </div>

              <div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                  </div>
                </div>
              </div>

              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text" class="form-control" placeholder="Masukan Kata Kunci">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>

              <h3 class="sidebar-title">Kategori</h3>
              <div class="sidebar-item categories">
                <ul>
                 <?php 
                  $queryTags = "SELECT `tags` FROM `tb_berita`";
                  $hasil = $this->db->query($queryTags)->result_array();
                  ?>
                    <?php foreach($hasil as $d) : ?>
                      <li><a href="#"><?= $d['tags']; ?><span>(25)</span></a></li>
                    <?php endforeach; ?>
                </ul>
              </div>

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <?php

                $queryRecent = "SELECT * FROM `tb_berita` ORDER BY `tb_berita`.`id` DESC";
                $tampil = $this->db->query($queryRecent)->result_array();

                ?>
                <?php foreach($tampil as $post) : ?>
                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/upload/artikel/') .$post['gambar']; ?>" alt="">
                  <h4><a href="<?= base_url('welcome/baca_berita/').$post['id']; ?>"><?= $post['judul']; ?></a></h4>
                  <time datetime=""><?= $post['tgl']; ?></time>
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
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<?php endforeach; ?>
