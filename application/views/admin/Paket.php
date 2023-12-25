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
          <li><a href="<?php echo base_url('index.php/Admin/index') ?>">
              <i class="fas fa-home" id="beranda"></i>
              <span class="nav-item">Beranda</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Admin/Paket') ?>">
              <i class="fas fa-book active"></i>
              <span class="nav-item active">Paket</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Admin/Pembayaran') ?>">
              <i class="fas fa-wallet"></i>
              <span class="nav-item">Pembayaran</span>
            </a></li>
          </a></li>
          <li><a href="" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Keluar</span>
            </a></li>
        </ul>
      </nav>
      <!-- CLOSE-NAV-SIDE-BAR -->

      <!-- OPEN-MAIN-ORDER -->
      <section class="main">
        <section class="main-order">
          <h1>Daftar Paket</h1>
          <div class="list-order-box">
            <h5 class="pilih-paket">Pilih Paket : </h5>
            <div class="form-group">
              <label for="paket1">
                <input type="radio" name="paket" id="paket1">Paket 1
              </label>
              <label for="paket2">
                <input type="radio" name="paket" id="paket1">Paket 2
              </label>
              <label for="paket3">
                <input type="radio" name="paket" id="paket1">Paket 3
              </label>
              <label for="paket4">
                <input type="radio" name="paket" id="paket1">Paket 4
              </label>
              <label for="paket5">
                <input type="radio" name="paket" id="paket1">Paket 5
              </label>
              <label for="paket6">
                <input type="radio" name="paket" id="paket6">Paket 6
              </label>
            </div>

          </div>
        </section>
      </section>
    </div>
  </body>

  </html>
</span>