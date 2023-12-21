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
    <section class="header2">
        <div class="wrapper">
        </div>
        <div class="text-box">
            <h1></h1>
            <h2></h2>
        </div>
    </section>
    <section>
        <center>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 50%;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="<?php echo $item->gambar; ?>" class="d-block w-100" style="height: 500px; alt=" ...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?php echo $item->gambar2; ?>" class="d-block w-100" style="height: 500px; alt=" ...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?php echo $item->gambar3; ?>" class="d-block w-100" style="height:500px;" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </center>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Inisialisasi Carousel
            var carousel = document.querySelector('#carouselExampleAutoplaying');
            var carouselInstance = new bootstrap.Carousel(carousel, {
                interval: 2000, // Ubah sesuai kebutuhan interval
                wrap: true // Atur apakah carousel akan wrapping atau tidak
            });
        </script>
        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-11   ">
                    <div class="card ">
                        <h5 class="card-header">Detail Paket</h5>
                        <div class="card-body text-white bg-dark">
                            <?php if (isset($item) && $item) { ?> <!-- Pastikan $item ada dan tidak null -->
                                <h5 class="card-title"><?php echo $item->namapaket; ?></h5>
                                <p class="card-text">Nama Kendaraan : <?php echo $item->nama_kendaraan; ?></p>
                                <p class="card-text">Jumlah Kendaraan : <?php echo $item->jumlah_kendaraan; ?></p>
                                <p class="card-text">Tempat : <?php echo $item->tempat; ?></p>
                                <p class="card-text">Jumlah Pengunjung : <?php echo $item->jumlah_pengunjung; ?></p>
                                <p class="card-text">Jumlah MC : <?php echo $item->jumlah_mc; ?></p>
                                <p class="card-text">Nama Hiburan : <?php echo $item->nama_hiburan; ?></p>
                                <p class="card-text">Nama Dekorasi : <?php echo $item->nama_dekorasi; ?></p>
                                <p class="card-text">Nama Make Up : <?php echo $item->nama_makeup; ?></p>
                                <p class="card-text">Deskripsi : <?php echo $item->deskripsi; ?></p>
                                <p class="card-text">Total Harga : <?php echo $item->harga; ?></p>
                            <?php } else { ?>
                                <p>Data tidak tersedia</p>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto" style="padding-bottom: 100px;">
            <a href="<?php echo base_url('Index.php/Sewa/index/' . $item->IdPaket) ?>" class="btn btn-primary">Pesan Sekarang</a>
        </div>
        </div>
    </section>

</body>
<footer>

</footer>

</html>