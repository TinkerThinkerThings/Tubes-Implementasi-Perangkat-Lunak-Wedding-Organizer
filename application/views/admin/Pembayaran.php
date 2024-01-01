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
              <img src="../../asset/photo/logo.png" alt="GreenSide">
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
          <h1>History Pembayaran</h1>
          <div class="list-order-box-pesanan">
            <table>
              <tr class="judul">
                <td colspan="8">
                  <h1>Pesanan Terbaru</h1>
                </td>
              </tr>
              <tr>
                <th>ID Sewa</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>ID Paket</th>
                <th>Pembayaran</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>

              <?php foreach ($dataPenyewaan as $row) : ?>
                <tr>
                  <td><?php echo $row->ID_Sewa ?></td>
                  <td><?php echo $row->Nama_Pelanggan ?></td>
                  <td><?php echo $row->Alamat ?></td>
                  <td><?php echo $row->IdPaket ?></td>
                  <td><?php echo $row->Pembayaran ?></td>
                  <td><?php echo $row->harga ?></td>
                  <td><?php echo $row->status ?></td>>
                  <td>
                    <button class="terima" onclick="terimaPesanan(<?php echo $row->ID_Sewa ?>)">Terima</button>
                    <button class="tolak" onclick="tolakPesanan(<?php echo $row->ID_Sewa ?>)">Tolak</button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <!-- JAVASCRIPT-ACTION -->
          <script>
            function terimaPesanan(idSewa) {
              if (confirm('Anda yakin ingin menerima pesanan ini?')) {
                window.location.href = '<?php echo base_url('index.php/Admin/terimaPesanan/') ?>' + idSewa;
              }
            }

            function tolakPesanan(idSewa) {
              if (confirm('Anda yakin ingin menolak pesanan ini?')) {
                window.location.href = '<?php echo base_url('index.php/Admin/tolakPesanan/') ?>' + idSewa;
              }
            }
          </script>

        </section>
      </section>
    </div>
  </body>

  </html>
</span>