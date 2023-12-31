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
              <img src="../../../asset/photo/logo.png" alt="GreenSide">
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
            <h1>Form Edit Paket</h1>
            <a href="<?php echo base_url('index.php/Admin/Paket'); ?>" class="btn-kembali">Kembali</a>
          </div>
          <div class="list-order-box-paket-tambah-paket">
            <div class="form-group">
              <?php echo form_open_multipart(base_url('index.php/Admin/edit_paket/' . $paket->IdPaket)); ?>
              <div class="form-group">
                <input type="hidden" name="IdPaket" value="<?php echo $paket->IdPaket; ?>">

                <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" placeholder="Nama Kendaraan" value="<?php echo $paket->nama_kendaraan; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="jumlah_kendaraan" name="jumlah_kendaraan" placeholder="Jumlah Kendaraan" value="<?php echo $paket->jumlah_kendaraan; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" value="<?php echo $paket->tempat; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="jumlah_pengunjung" name="jumlah_pengunjung" placeholder="Jumlah Pengunjung" value="<?php echo $paket->jumlah_pengunjung; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="jumlah_mc" name="jumlah_mc" placeholder="Jumlah MC" value="<?php echo $paket->jumlah_mc; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="nama_hiburan" name="nama_hiburan" placeholder="Nama Hiburan" value="<?php echo $paket->nama_hiburan; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="nama_dekorasi" name="nama_dekorasi" placeholder="Nama Dekorasi" value="<?php echo $paket->nama_dekorasi; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="nama_makeup" name="nama_makeup" placeholder="Nama Makeup" value="<?php echo $paket->nama_makeup; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="namapaket" name="namapaket" placeholder="Nama Paket" value="<?php echo $paket->namapaket; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?php echo $paket->deskripsi; ?>" required>
                <label for="floatingInputDisabled"></label>
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?php echo $paket->harga; ?>" required>
                <label for="floatingInputDisabled"></label>

                <button type="submit" class="tambah-paket-btn">Simpan Perubahan</button>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </section>
      </section>
    </div>
  </body>

  </html>
</span>