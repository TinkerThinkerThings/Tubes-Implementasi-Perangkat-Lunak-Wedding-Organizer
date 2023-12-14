<?php
    $Name = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $JenisKelamin = $_POST['jenisKelamin'];
    $Email = $_POST['email'];
    $NoHP = $_POST('noHP');
    $conn = mysql_connect("localhost","root","","dbImpal");
    $sql = "insert into pelanggan values('',$Name,$Alamat,$JenisKelamin,$Email,$NoHP)";
        if($res = mysql_query($conn,$sql)){
            echo "Berhasil melakukan registrasi";
        }else{
            echo "Gagal melakukan regitrasi";
        }
?>