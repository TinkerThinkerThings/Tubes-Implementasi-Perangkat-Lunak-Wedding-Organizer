<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard | GreenSide</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/admin.css') ?>" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Link AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>

  <body>
    <!-- OPEN-NAV-SIDE-BAR -->
    <div class="container">
      <nav>
        <ul>
          <li>
            <div class="logo">
              <img src="../../../asset/photo/logo.png" alt="GreenSide">
              <span class="nav-item">GreenSide</span>
            </div>
          </li>
          <li><a href="<?php echo base_url('index.php/Admin/index') ?>">
              <i class="fas fa-home" id="beranda"></i>
              <span class="nav-item">Beranda</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Admin/Paket') ?>">
              <i class="fas fa-book"></i>
              <span class="nav-item">Paket</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Admin/Pembayaran') ?>">
              <i class="fas fa-wallet active"></i>
              <span class="nav-item active">Pembayaran</span>
            </a></li>
          <li><a href="<?php echo base_url('index.php/Verifikasidata/logout') ?>" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Keluar</span>
            </a></li>
        </ul>
      </nav>
      <!-- CLOSE-NAV-SIDE-BAR -->

      <section class="main">
        <section class="main-order">
          <div class="list-order-box-cetak-pesanan">
            <h1 class="judul">Cetak Pembayaran</h1>
            <table>
              <tr>
                <td>ID Sewa</td>
                <td>:</td>
                <td><?php echo $dataCetakSewa['ID_Sewa']; ?></td>
              </tr>
              <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><?php echo $dataCetakSewa['Nama_Pelanggan']; ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $dataCetakSewa['Alamat']; ?></td>
              </tr>
              <tr>
                <td>ID Paket</td>
                <td>:</td>
                <td><?php echo $dataCetakSewa['IdPaket']; ?></td>
              </tr>
              <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp. <?php echo $dataCetakSewa['harga']; ?></td>
              </tr>
              <tr>
                <td>Metode Pembayaran</td>
                <td>:</td>
                <td><?php echo $dataCetakSewa['Pembayaran']; ?></td>
              </tr>
            </table>

            <button class="print-out"><i class="fas fa-print"></i></button>
            <a href="<?php echo base_url('index.php/Admin/Pembayaran'); ?>" class="close">Close</a>
          </div>
        </section>
      </section>
    </div>

    <script>
      $(document).ready(function() {
        // Fungsi untuk menangani klik pada tombol Cetak
        $('.print-out').click(function() {
          // Mendapatkan elemen dengan class 'list-order-box-cetak-pesanan'
          var printElement = $('.list-order-box-cetak-pesanan')[0];

          // Menggunakan window.print() untuk mencetak elemen tersebut
          window.print();
        });
      });
    </script>
  </body>

  </html>
</span>