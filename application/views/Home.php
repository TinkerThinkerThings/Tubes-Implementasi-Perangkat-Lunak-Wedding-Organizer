<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Pelanggan</title>
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
            <img src="<?php echo base_url('asset/photo/wedding.jpg') ?>" class="img-fluid" alt="...">
        </div>
        <div>
            <h1> GreenSide</h1>
            <h2 ">Green Side adalah perusahaan yang bergerak dalam Wedding Organizer, kami telah memulai ini sejak tahun
                2018 sudah banyak menangani pengantin pengantin yang akan menikah. Cabang Wedding Organizer kami telah
                tersebar hampir seluruh negara Indonesia
                banyak dari pengantin puas akan layanan yang kami tawarkan, Wedding Organizer kami berbeda dengan yang
                lain soalnya kami mempunyai ciri khas yaitu garansi kebahagiaan jika terjadi cerai uang kembali.</h2>
        </div>
        <div class=" testi">
                <h1>Testimoni</h1>
                <div class=" row">

                    <img src="<?php echo base_url('asset/photo/gb3.jpg') ?>" class="img-thumbnail" style="width: 400px;" alt="...">
                    <h1 class="col">"We verry happy, WO ini memberi kami pengalaman menikah yang sangat diisi dengan kebahagiaan. Dengan segala WO yang ada GreenSide adalah yang terbaik " <br> Deriansyah & Reva Fidela</h1>
                </div>
        </div>



        <section class="offering">
            <div class="container">
                <div class="tabel">
                    <div class="cols-3">
                        <div class="ikon"><img src=""></div>
                        <h4>Akad</h4>
                        <p>Di Greenside kami bertanggung jawab atas akad anda sampai selesai, greenside memprioritaskan
                            kesenangan dan kepuasan hati kalian, greenside akan membuat anda merasa puas dengan service akad
                            di kami</p>
                    </div>
                    <div class="cols-3">
                        <div class="ikon"><img src=""></div>
                        <h4>Catering</h4>
                        <p>Greenside sudah menyiapkan cathering selaku panitia penyelenggara WO, Di catering kami anda bisa
                            memilih makanan apa saja yang anda inginkan mulai dari makanan berat sampai makanan ringan.</p>
                    </div>
                    <div class="cols-3">
                        <div class="ikon"><img src=""></div>
                        <h4>Makeup</h4>
                        <p>Di greenside pun kami sudah menyiapkan makeup artis untuk mendandani pengantin dan keluarga anda,
                            jangan khawatir makeup artis di kami sudah sangat profesional menangani wedding.</p>
                    </div>
                </div>
                <div class="tabel2">
                    <div class="cols-2">
                        <div class="ikon"><img src=""></div>
                        <h4>Photografi</h4>
                        <p>Di Greenside kami menyediakan liputan foto dan video saat pernikahan anda berlangsung,
                            photografer kami sangatlah profesional dipastikan anda akan puas saat melihat lihat hasil
                            liputan kami.</p>
                    </div>
                    <div class="cols-2">
                        <div class="ikon"><img src=""></div>
                        <h4>Hiburan</h4>
                        <p>Greenside sudah menyiapkan hiburan selaku panitia penyelenggara WO, Di hiburan kami anda bisa
                            memilih hiburan apa saja yang anda inginkan mulai dari makanan dandut sampai orkesta.</p>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </section>
</body>

</html>