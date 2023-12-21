<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan awal</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/global.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

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
    </section>
    <section class="home" id="home">
        <div class="gal">
            <img src="<?php echo base_url('asset/photo/paket1.jpg') ?>" class="img-fluid" alt="...">
        </div>
        <div>
            <h1> Pembayaran telah berhasi </h1>
            <h2>Terima Kadih Telah Menyewa Wedding Organizer Kami</h2>
        </div>
        <div class="d-grid gap-2 mt-5 col-6 mx-auto">
            <a href="<?php echo base_url('index.php/Paket/') ?>" class="btn btn-primary">Pesan Sekarang</a>
        </div>

    </section>


</body>
<footer>

</footer>