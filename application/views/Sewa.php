<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga</title>
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
    <section class="mharga" id="mharga">
        <?php echo form_open(base_url('index.php/Sewa/tambahsewa/' . $item->IdPaket)); ?>

        <div class="harga">
            <h1>Konfirmasi Pemesanan</h1>
        </div>
        <div class="harga">
            <h5>Nama Pemesan</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="Nama_Pelanggan" name="Nama_Pelanggan" placeholder="" required>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Alamat</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="Alamat" name="Alamat" required>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Paket Yang Dipilih</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="namapaket" value="<?php echo $item->namapaket; ?>" readonly>
                <label for="floatingInputDisabled"></label>
            </div>
            <h5>Harga Paket</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $item->harga; ?>" readonly>
                <label for="floatingInputDisabled"></label>
            </div>

            <h5>Metode Pembayaran</h5>
            <div class="form-group">
                <select class="form-control" name="Pembayaran" id="Pembayaran">
                    <option>Tunai</option>
                    <option>Bank</option>
                    <option>E-Wallet</option>
                </select>
            </div>

            <div class="d-grid gap-2 mt-5 col-6 mx-auto">
                <input type="submit" name="submit" class="btn btn-secondary" value="Bayar Sekarang">
            </div>
        </div>
        <?php echo form_close(); ?>
    </section>
    <!-- End Of Harga -->

    <!-- FOOTER -->

    <!-- END OF FOOTER -->
    <br>
    </body>

</html>