<?php
include "db/koneksi.php";

$nik = $_SESSION['nik'];

//mengambil data
$data = mysqli_query($mysqli,"SELECT * FROM catatan WHERE nik='$_SESSION[nik]'");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $jam = $_POST["jam"];
    $lokasi = $_POST["lokasi"];
    $suhu = $_POST["suhu"];

    $query = "UPDATE siswa SET
            nis = '$nis',
            nama_lengkap = '$nama_lengkap',
            jenis_kelamin = '$jenis_kelamin',
            kelas = '$kelas',
            jurusan = '$jurusan',
            golongan_darah = '$golongan_darah',
            ibu_kandung = '$ibu_kandung',
        ";

    $mysqli->query($query) or die($mysqli->error);

    header("Location: index.php");
}

include "views/v_tambah.php";