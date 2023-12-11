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
    <!-- Kontak -->
    <section class="kontak" id="kontak">
        <div class="judul">
            <h1>Tentang Kontak Kami</h1>
            <h2>ome quick example text to build on the card title and make up the bulk of the card's content.</h2>

        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1400.4306762980164!2d107.55364192299055!3d-6.888673138792319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e4352d6c5179%3A0x5ede9739cc91de1c!2sGg.%20Masabakti%206%2C%20Cigugur%20Tengah%2C%20Kec.%20Cimahi%20Tengah%2C%20Kota%20Cimahi%2C%20Jawa%20Barat%2040522!5e0!3m2!1sid!2sid!4v1701693539502!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="kontak">
            <div class="row">
                <img src="./src/assets/images/" class="card-img-top" height="20%" alt="...">
            </div>
        </div>
    </section>
    <!-- End Of Kontak -->
    <!-- FOOTER -->
    <footer>
        <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img">
                            <title>Bootstrap</title>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                        </svg>
                        <span class="fs-5">Bootstrap</span>
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Designed and built with all the love in the world by the <a href="/docs/5.3/about/team/">Bootstrap team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</li>
                        <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                        <li class="mb-2">Currently v5.3.2.</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/">Home</a></li>
                        <li class="mb-2"><a href="/docs/5.3/">Docs</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/">Examples</a></li>
                        <li class="mb-2"><a href="https://icons.getbootstrap.com/">Icons</a></li>
                        <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                        <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
                        <li class="mb-2"><a href="https://cottonbureau.com/people/bootstrap" target="_blank" rel="noopener">Swag Store</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/docs/5.3/getting-started/">Getting started</a></li>
                        <li class="mb-2"><a href="/docs/5.3/examples/starter-template/">Starter template</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/webpack/">Webpack</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/parcel/">Parcel</a></li>
                        <li class="mb-2"><a href="/docs/5.3/getting-started/vite/">Vite</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" target="_blank" rel="noopener">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/icons" target="_blank" rel="noopener">Icons</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/rfs" target="_blank" rel="noopener">RFS</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/examples/" target="_blank" rel="noopener">Examples repo</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues" target="_blank" rel="noopener">Issues</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions" target="_blank" rel="noopener">Discussions</a></li>
                        <li class="mb-2"><a href="https://github.com/sponsors/twbs" target="_blank" rel="noopener">Corporate sponsors</a></li>
                        <li class="mb-2"><a href="https://opencollective.com/bootstrap" target="_blank" rel="noopener">Open Collective</a></li>
                        <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5" target="_blank" rel="noopener">Stack Overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END OF FOOTER -->
    <br>
</body>

</html>