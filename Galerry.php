<?php
session_start();
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
    <!-- Galerry -->
    <section class="galery" id="galery">

        <div class="gal">
            <img src="./src/assets/images/paket1.jpg" class="img-fluid" alt="...">
        </div>
        <div class="gam">
            <h1> Our Galerry</h1>

            <div class="row">

                <div class="card" style="width: 18rem;">
                    <img src="./src/assets/images/gb5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./src/assets/images/gb2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./src/assets/images/gb3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 25px;">
                <div class="card" style="width: 18rem;">
                    <img src="./src/assets/images/gb6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./src/assets/images/gb7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./src/assets/images/gb8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto" id="btnig">
                    <a href="https://www.instagram.com/green_sideofficial" class="btn btn-secondary">Visit Instagram</a>
                </div>
            </div>

        </div>
    </section>

    <!-- END OF Galery -->
    <!-- FOOTER -->

    <!-- END OF FOOTER -->
    <br>
</body>

</html>