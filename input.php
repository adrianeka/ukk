<?php
include "db/koneksi.php";

$tanggal = $_POST["tanggal"];
$jam = $_POST["jam"];
$lokasi = $_POST["lokasi"];
$suhu = $_POST["suhu"];
$nik = $_SESSION["nik"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "INSERT INTO `catatan` (`cid`, `nik`, `tanggal`, `jam`, `lokasi`, `suhu`)
     VALUES (NULL, '$nik', '$tanggal', '$jam', '$lokasi', '$suhu');";
    $mysqli->query($query) or die($mysqli->error);
    $massage = "<div class='alert alert-success'>Anda berhasil menambahkan data</div>";

    header("Location: index.php?page=catatan_perjalanan");
}
