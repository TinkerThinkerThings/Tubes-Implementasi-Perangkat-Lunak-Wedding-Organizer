<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard | GreenSide</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/admin.css') ?>" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- Data Table -->
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

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
          <div class="tambah-paket">
            <h1>Daftar Paket</h1>
            <a href="<?php echo base_url('index.php/Admin/tambah_paket') ?>"> + Tambah Paket</a>
          </div>
          <div class="list-order-box-paket">
            <div class="form-group">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>ID Paket</th>
                    <th>Nama Paket</th>
                    <th>Deskripsi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($dataPaket as $row) : ?>
                    <tr>
                      <td><?php echo $row->IdPaket ?></td>
                      <td><?php echo $row->namapaket ?></td>
                      <td><?php echo $row->deskripsi ?></td>
                      <td><?php echo $row->keterangan ?></td>
                      <td></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

          </div>
        </section>
      </section>
    </div>
    <!-- Link JS Data Table -->

    <script>
      new DataTable('#example', {
        columnDefs: [{
            targets: [0],
            orderData: [0, 1]
          },
          {
            targets: [1],
            orderData: [1, 0]
          },
          {
            targets: [3],
            orderData: [3, 0]
          }
        ]
      });
    </script>
  </body>

  </html>
</span>