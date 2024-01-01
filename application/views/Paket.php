<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket | Pelanggan</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/global.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- NAVBAR -->
    <section class="sticky-top">
        <nav>
            <div class="wrapper">
                <div class="logo">
                    <a href="">GreenSide</a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="<?php echo base_url('index.php/Home') ?>" class="tbl-biru">Home</a></li>
                        <li><a href="<?php echo base_url('index.php/Paket') ?>" class="tbl-biru">Paket</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/Gallery') ?>" class="tbl-biru">Galeri</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/Kontak') ?>" class="tbl-biru">Kontak</a></li>
                        <li><a href="<?php echo base_url('index.php/Verifikasidata/logout') ?>" class="tbl-biru">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- END OF NAVBAR -->
</head>

<body>

    <!-- Paket -->
    <section class="paket" id="paket">
        <h1>Indoor</h1>
        <div class="row mt-1">
            <?php foreach ($indoorPaket as $item) { ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem; height:25rem; margin-top:20px; margin:auto; padding:20px;">
                        <img src="<?php echo $item->gambar; ?>" class="card-img-top" style="height:40% " style="" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->namapaket; ?></h5>
                            <p class="card-text text-dark"><?php echo $item->deskripsi; ?></p>
                            <a href="<?php echo base_url('index.php/Paket/Detail/' . $item->IdPaket) ?>" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Tambahkan bagian Outdoor sesuai kebutuhan -->
    </section>
    <section class="paket" id="paket">
        <h1>Outdoor</h1>
        <div class="row">
            <?php foreach ($outdoorPaket as $item) { ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem; height:25rem; margin-top:20px; margin:auto; padding:20px;">

                        <img src="<?php echo $item->gambar; ?>" class="card-img-top" style="height:40%" alt="...">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->namapaket; ?></h5>
                            <p class="card-text text-dark"><?php echo $item->deskripsi; ?></p>

                            <a href="<?php echo base_url('index.php/Paket/Detail/' . $item->IdPaket) ?>" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- Tambahkan bagian Outdoor sesuai kebutuhan -->
    </section>
    <!-- END OF CARD -->

    <!-- FOOTER -->

    <!-- END OF FOOTER -->
    <br>
</body>

</html>