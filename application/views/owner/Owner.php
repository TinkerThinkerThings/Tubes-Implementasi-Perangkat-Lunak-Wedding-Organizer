  <span style="font-family: verdana, geneva, sans-serif;">
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <title>Owner Dashboard | GreenSide</title>
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
                <img src="<?php echo base_url('./asset/photo/logo.png') ?>" alt="GreenSide">
                <span class="nav-item">GreenSide</span>
              </div>
            </li>
            </a></li>
            <li><a href="<?php echo base_url('index.php/Owner') ?>">
                <i class="	fas fa-file-alt active"></i>
                <span class="nav-item active">Laporan</span>
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
            <h1>Laporan Pemesanan</h1>
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

                </tr>

                <?php foreach ($dataLaporan as $row) : ?>
                  <tr>
                    <td><?php echo $row->ID_Sewa ?></td>
                    <td><?php echo $row->Nama_Pelanggan ?></td>
                    <td><?php echo $row->Alamat ?></td>
                    <td><?php echo $row->IdPaket ?></td>
                    <td><?php echo $row->Pembayaran ?></td>
                    <td><?php echo $row->harga ?></td>
                    <td><?php echo $row->status ?></td>>

                  </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- JAVASCRIPT-ACTION -->

          </section>
        </section>
      </div>
    </body>

    </html>
  </span>