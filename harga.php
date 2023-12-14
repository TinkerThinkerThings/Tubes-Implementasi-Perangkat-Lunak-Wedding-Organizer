<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'wodb');

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Fungsi untuk mendapatkan data paket dari tabel

function getPaketData($koneksi, $IdPaket)
{
    $query = "SELECT * FROM tbpaket WHERE IdPaket = $IdPaket";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    }

    return null;
}

//membuat format rupiah dengan PHP
//tutorial www.malasngoding.com

function rupiah($angka)
{

    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}



$IdPaket = isset($_GET['IdPaket']) ? $_GET['IdPaket'] : 0;

// Ambil data paket dari tabel berdasarkan ID yang dikirim melalui URL
$paket_data = getPaketData($koneksi, $IdPaket);

mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga</title>
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
                        <li><a href="harga.php" class="tbl-biru">Harga</a></li>
                        <li><a href="kontak.php" class="tbl-biru">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- END OF NAVBAR -->
</head>

<body>

    <!-- Harga -->
    <section class="mharga" id="mharga">
        <div class="harga">
            <h1> Perkiraan Harga</h1>
        </div>
        <div class="harga">
            <h5>Kendaraan</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="kendaraan" placeholder="" value="<?php echo rupiah($paket_data['kendaraan']); ?>" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Tempat</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="tempat" placeholder="" value="<?php echo rupiah($paket_data['tempat']); ?>" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Jumlah Orang</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="jumlah" placeholder="" value="<?php echo rupiah($paket_data['jumlah']); ?>" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>MC</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="mc" placeholder="" value="<?php echo rupiah($paket_data['mc']); ?>" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Hiburan</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="hiburan" placeholder="" value="<?php echo rupiah($paket_data['hiburan']); ?>" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Dekorasi</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="dekorasi" placeholder="" value="<?php echo rupiah($paket_data['dekorasi']); ?>" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Makeup</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="makeup" placeholder="" value="<?php echo rupiah($paket_data['makeup']); ?>" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-secondary" type="submit">Submit</button>
            </div>
            <h5>Total</h5>
            <div class="$form-floating">
                <input type="email" class="form-control" id="total" placeholder="" disabled>
                <label for="floatingInputDisabled"></label>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-secondary" type="button">Pembayaran</button>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Ambil semua input yang akan dijumlahkan
                    const inputs = document.querySelectorAll('input[id^="kendaraan"], input[id^="tempat"], input[id^="jumlah"], input[id^="mc"], input[id^="hiburan"], input[id^="dekorasi"], input[id^="makeup"]');

                    // Tambahkan event listener untuk tombol submit
                    const submitButton = document.querySelector('button[type="submit"]');
                    submitButton.addEventListener("click", function() {
                        let total = 0;

                        // Lakukan penjumlahan
                        inputs.forEach(function(input) {
                            // Ubah nilai menjadi angka setelah menghapus 'Rp ' dan pemisah ribuan
                            const nilai = parseFloat(input.value.replace('Rp ', '').replace(/\./g, '').replace(',', '.')) || 0;
                            total += nilai;
                        });

                        // Tampilkan hasil penjumlahan di input total
                        document.getElementById("total").value = "Rp " + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                    });
                });
            </script>
    </section>
    <!-- End Of Harga -->

    <!-- FOOTER -->

    <!-- END OF FOOTER -->
    <br>
</body>

</html>