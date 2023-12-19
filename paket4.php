<?php
session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan awal</title>
    <link rel="stylesheet" href="src/style/global.css">
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
                        <li><a href="home.php" class="tbl-biru">Home</a></li>
                        <li><a href="pakett.php" class="tbl-biru">Paket</a></li>
                        <li><a href="Galerry.php" class="tbl-biru">Galeri</a></li>
                        <li><a href="hargamain.php" class="tbl-biru">Harga</a></li>
                        <li><a href="kontak.php" class="tbl-biru">Kontak</a></li>
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
                        <img src="./src/assets/images/paket1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./src/assets/images/paket1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./src/assets/images/paket2.jpg" class="d-block w-100" alt="...">
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
                            <h5 class="card-title">Paket 1</h5>
                            <p class="card-text">ssss</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto" style="padding-bottom: 100px;">
            <a href="harga.php?IdPaket=4" class="btn btn-primary">Pesan Sekarang</a>
        </div>
        </div>
    </section>

</body>
<footer>

</footer>

</html>