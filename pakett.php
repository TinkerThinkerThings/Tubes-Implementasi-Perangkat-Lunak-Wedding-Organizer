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
    <title>Paket</title>
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
                        <li><a href="#home" class="tbl-biru">Home</a></li>
                        <li><a href="#paket" class="tbl-biru">Paket</a></li>
                        <li><a href="#galery" class="tbl-biru">Galeri</a></li>
                        <li><a href="#mharga" class="tbl-biru">Harga</a></li>
                        <li><a href="#kontak" class="tbl-biru">Kontak</a></li>
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
        <h1> Indoor</h1>

        <div class="row">

            <div class="card" style="width: 18rem; height:25rem;">
                <img src="./src/assets/images/paket1.jpg" class="card-img-top" style="height:40%" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paket 1</h5>
                    <p class="card-text">...</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height:25rem;">
                <img src="./src/assets/images/paket2.jpg" class="card-img-top" style="height:40%" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paket 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height:25rem;">
                <img src="./src/assets/images/paket3.jpg" class="card-img-top" style="height:40%" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paket 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <br>
        <h1> Outdoor</h1>

        <div class="row">

            <div class="card" style="width: 18rem; height:25rem;">
                <img src="./src/assets/images/Untitled.jpg" class="card-img-top" style="height:40%" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paket 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height:25rem; ">
                <img src="./src/assets/images/paket2o.JPG" class="card-img-top" style="height:40%" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paket 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height:25rem;  ">
                <img src="./src/assets/images/paket3oo.jpg" class="card-img-top" style="height:40% " alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paket 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- END OF CARD -->

    <!-- FOOTER -->

    <!-- END OF FOOTER -->
    <br>
</body>

</html>