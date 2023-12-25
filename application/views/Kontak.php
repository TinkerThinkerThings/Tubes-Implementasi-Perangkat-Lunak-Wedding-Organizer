<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/global.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;1,300;1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


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
    <!-- Kontak -->
    <section class="kontak" id="kontak">
        <div class="judul">
            <h1>GreenSide</h1>

        </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1400.4306762980164!2d107.55364192299055!3d-6.888673138792319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e4352d6c5179%3A0x5ede9739cc91de1c!2sGg.%20Masabakti%206%2C%20Cigugur%20Tengah%2C%20Kec.%20Cimahi%20Tengah%2C%20Kota%20Cimahi%2C%20Jawa%20Barat%2040522!5e0!3m2!1sid!2sid!4v1701693539502!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="kontak">
            <div class="row">
                <img src="" class="card-img-top" height="20%" alt="">
            </div>
        </div>

        <div class="isi">

            <a href="https://www.instagram.com/green_sideofficial?utm_medium=copy_link" class="floatt" target="_blank">
                <i class="fab fa-instagram my-floatt"></i>
            </a>
            <a href="https://api.whatsapp.com/send?phone=6281293984743&text=Hallo%20saya%20mau%20order!!" class="float" target="_blank">
                <i class="fab fa-whatsapp my-float"></i>
                <i class=""></i>
            </a>

        </div>
    </section>
    <!-- End Of Kontak -->
    <br>
</body>

</html>