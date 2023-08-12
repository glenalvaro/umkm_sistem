<style>
   .text {
    text-align: center;
    font-weight: bold;
    color: #fff;
    font-size: 11px;
  }
  .size-font{
    font-size: 12px;
  }
</style>

<?php foreach($setting as $st) : ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <div class="user-panel">
        <div class="image">
            <center>
              <img style="width: 30%;" src="<?= base_url('assets/img/') . $st['logo']; ?>" class="img-responsive" alt="User Image">
            </center>
        </div>
         <br>
         <br>
        <p style="margin-bottom: 6px;" class="text text-uppercase"><?= $st['nama_sistem']; ?></p>
        <p class="text text-uppercase"><?= $st['alamat']; ?></p>
      </div>

      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">MENU</li>

          <li class="nav-item size-font">
            <a href="<?= base_url('admin'); ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item size-font">
            <a href="<?= base_url('produk'); ?>" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Data UMKM
              </p>
            </a>
          </li>

           <li class="nav-item size-font">
            <a href="<?= base_url('user/profile') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>

          <?php if($user['level'] == 1 ) : ?>
          <li class="nav-item size-font">
            <a href="<?= base_url('kategori'); ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <li class="nav-item size-font">
            <a href="<?= base_url('user'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>

          <li class="nav-item size-font">
            <a href="<?= base_url('berita'); ?>" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>

           <li class="nav-item size-font">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Peta UMKM
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item size-font">
                  <a href="<?= base_url('produk/lokasi_umkm'); ?>" class="nav-link">
                    <i class="fas fa-map-pin nav-icon"></i>
                  <p>
                    Persebaran UMKM
                  </p>
                </a>
                </li>
              <li class="nav-item size-font">
                <a href="<?= base_url('produk/lokasi_cari'); ?>" class="nav-link">
                  <i class="fas fa-search nav-icon"></i>
                  <p>
                    Cari UMKM
                  </p>
                </a>
              </li>
              <li class="nav-item size-font">
                <a href="<?= base_url('produk/umkm_sektor'); ?>" class="nav-link">
                  <i class="fas fa-store nav-icon"></i>
                  <p>
                    Sektor UMKM
                  </p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item size-font">
            <a href="<?= base_url('produk/galery'); ?>" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Galery
              </p>
            </a>
          </li>

          <li class="nav-item size-font">
            <a href="<?= base_url('setting') ?>" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>

          <?php else : ?>
          <?php endif; ?>

           <li class="nav-item size-font">
            <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
    </div>
  </aside>

<?php endforeach; ?>