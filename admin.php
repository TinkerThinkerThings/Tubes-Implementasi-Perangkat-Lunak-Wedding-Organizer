<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard | GreenSide</title>
    <link rel="stylesheet" href="src/style/admin.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  </head>

  <body>
    <div class="container">
      <nav>
        <ul>
          <li><a href="#" class="logo">
              <img src="src/assets/images/logo.png" alt="GreenSide">
              <span class="nav-item">GreenSide</span>
            </a></li>
          <li><a href="">
              <i class="fas fa-home" id="beranda"></i>
              <span class="nav-item">Beranda</span>
            </a></li>
          <li><a href="">
              <i class="fas fa-book"></i>
              <span class="nav-item">Pesanan</span>
            </a></li>
          <li><a href="">
              <i class="fas fa-wallet"></i>
              <span class="nav-item">Pembayaran</span>
            </a></li>
          <li><a href="">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Pengaturan</span>
            </a></li>
          <li><a href="">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Bantuan</span>
            </a></li>
          <li><a href="" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Keluar</span>
            </a></li>
        </ul>
      </nav>

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
            <table class="table-order">
              <thead>
                <tr>
                  <th scope="col">Kode Sewa</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Email</th>
                  <th scope="col">No Telephone</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <th scope="row">Bagas</th>
                  <th scope="row">Jalan Merauke No.55</th>
                  <th scope="row">Laki - Laki</th>
                  <th scope="row">bagasganteng@gmail.com</th>
                  <th scope="row">088855556677</th>
                  <th scope="row"></th>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <th scope="row">Cantika</th>
                  <th scope="row">Jalan Sulawesi No.105</th>
                  <th scope="row">Perempuan</th>
                  <th scope="row">akucantika@gmail.com</th>
                  <th scope="row">088855554433</th>
                  <th scope="row"></th>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <th scope="row">Layla</th>
                  <th scope="row">Jalan Cahaya No.225</th>
                  <th scope="row">Perempuan</th>
                  <th scope="row">laylay@gmail.com</th>
                  <th scope="row">088822553311</th>
                  <th scope="row"></th>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>
    </div>
  </body>

  </html>
</span>