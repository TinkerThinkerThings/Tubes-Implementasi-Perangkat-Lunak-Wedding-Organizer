<!DOCTYPE html>
<html>
<head>
<title>Tambah Pesan</title>
</head>
<body>
<?php
<form action="simpanPesan.php">
<!—diasumsikan idPengirim = id user login, didapatkan dari session dan
idpesan auto_increment dan tanggal adalah tanggal saat ini sehingga tidak
perlu input -->

<input type="text" name="Penerima">
<input type="text" name="judul">
<textarea name="TextPesan"></textarea>
<input type="submit" name="submit" value="Simpan">
</form>
</body>
</html>