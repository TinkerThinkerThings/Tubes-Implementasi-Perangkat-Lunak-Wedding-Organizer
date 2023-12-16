<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
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


    <div class="row">
        <div class="col-12 me-5  ms-auto" style="padding-left: 270px; padding-top:50px; padding-bottom: 50px;">
            <h1 class="heading"> Pembayaran </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 ms-auto">
            <form class="text-bayar" action=""></form>
            <div class="pay">

                <div class="detail col-md-10 me-5 ">
                    <div class="card sticky-top">
                        <div class="card-header bg-white">
                            <p class="teks-judul" style="color: black; font-size:30px;">Detail Pembayaran</p>
                        </div>
                        <div class="card-body">
                            <div class="row mt-2 mb-2">
                                <div class="col-md">
                                    <small>Sub Total</small>
                                </div>
                                <div class="col-md">
                                    IDR 145.000
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row mt-2 mb-2">
                                <div class="col-md">
                                    <small>TOTAL</small>
                                </div>
                                <div class="col-md">
                                    IDR 155.000
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-lg col-2 w-100" onclick="myFunction()">Bayar</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            </section>
            <!-- footer section ends -->
            <!-- custom js file link -->
            <script src="js/script.js"></script>
            <script>
                function myFunction() {
                    alert("Pembayaran Berhasil!");
                }
            </script>

</body>

</html>