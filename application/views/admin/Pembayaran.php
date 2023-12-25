<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard | GreenSide</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/admin.css') ?>" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  </head>

  <body>
    <!-- OPEN-NAV-SIDE-BAR -->
    <div class="container">
      <nav>
        <ul>
          <li>
            <div class="logo">
              <img src="../../asset/photo/logo.png" alt="GreenSide">
              <span class="nav-item">GreenSide</span>
            </div>
          </li>
          <li><a href="<?php echo base_url('index.php/Home/Admin') ?>">
              <i class="fas fa-home" id="beranda"></i>
              <span class="nav-item">Beranda</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Home/Pesanan') ?>">
              <i class="fas fa-book"></i>
              <span class="nav-item">Pesanan</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Home/Pembayaran') ?>">
              <i class="fas fa-wallet active"></i>
              <span class="nav-item active">Pembayaran</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Home/Pengaturan') ?>">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Pengaturan</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Home/Bantuan') ?>">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Bantuan</span>
            </a></li>
          <li><a href="" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Keluar</span>
            </a></li>
        </ul>
      </nav>
      <!-- CLOSE-NAV-SIDE-BAR -->

      <section class="main">
        <div class="main-top">
          <h1>Dashboard</h1>
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="main-dashboard">

        </div>

        <section class="main-order">
          <h1>Pesanan Terbaru</h1>
          <div class="list-order-box">
          </div>
        </section>
      </section>
    </div>
  </body>

  </html>
</span>