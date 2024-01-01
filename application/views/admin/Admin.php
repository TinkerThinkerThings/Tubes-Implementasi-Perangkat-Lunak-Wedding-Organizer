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
                            <i class="fas fa-home active" id="beranda"></i>
                            <span class="nav-item active">Beranda</span>
                        </a></li>
                    <li><a href="<?php echo base_url('index.php/Admin/Paket') ?>">
                            <i class="fas fa-book"></i>
                            <span class="nav-item">Paket</span>
                        </a></li>
                    <li><a href="<?php echo base_url('index.php/Admin/Pembayaran') ?>">
                            <i class="fas fa-wallet"></i>
                            <span class="nav-item">Pembayaran</span>
                        </a></li>
                    <li><a href="<?php echo base_url('index.php/Verifikasidata/logout') ?>" class="logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-item">Keluar</span>
                        </a></li>
                </ul>
            </nav>
            <!-- CLOSE-NAV-SIDE-BAR -->

            <!-- OPEN-MAIN-SECTION -->
            <section class="main">
                <div class="main-top">
                    <h1>Selamat Datang Admin !</h1>
                    <!-- <i class="fas fa-user-cog"></i> -->
                </div>
                <div class="main-dashboard">
                    <div class="list-dashboard-box-card">
                        <div class="box">
                            <h3>Data Users</h3>
                            <h1><?php echo $dataUserCount; ?> Users</h1>
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="box">
                            <h3>Daftar Paket</h3>
                            <h1><?php echo $dataPaketCount; ?> Paket</h1>
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="box">
                            <h3>Data Penyewaan</h3>
                            <h1><?php echo $dataPenyewaanCount; ?> Order</h1>
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>

                <section class="main-order">
                    <h1>Data User</h1>
                    <div class="list-order-box-user">
                        <table>
                            <tr class="judul">
                                <th>Nama User</th>
                                <th>Alamat User</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Nomor Handphone</th>
                                <th>Roles</th>
                            </tr>

                            <?php foreach ($dataUser as $row) : ?>
                                <tr>
                                    <td><?php echo $row->Nama ?></td>
                                    <td><?php echo $row->Alamat ?></td>
                                    <td><?php echo $row->Jenis_Kelamin ?></td>
                                    <td><?php echo $row->Email ?></td>
                                    <td><?php echo $row->No_Hp ?></td>
                                    <td><?php echo $row->Role ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </section>
            </section>
            <!-- CLOSE-MAIN-SECTION -->
        </div>
    </body>

    </html>
</span>