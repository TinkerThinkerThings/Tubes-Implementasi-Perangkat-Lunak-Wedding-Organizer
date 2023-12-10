<?php
$Host = "localhost";
$username = "root";
$password = "";
$database = "";

$koneksi = new mysqli($Host, $username, $password, $database);
if ($koneksi->connect_error) {
    die("koneksi gagal:" . $koneksi->connect_error);
}
echo "";
