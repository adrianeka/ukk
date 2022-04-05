<?php

include "db/koneksi.php";

// Check apakah sudah login atau belum, jika sudah
// sistem akan me-redirect ke halaman index.php
if (checkLogin()) {
    header("Location: index.php");
}

// Jika terdapat request dengan method 'POST'
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];

    // Sistem akan mencari users dengan username dan password sesuai input user
    $query = "SELECT * FROM user
            WHERE nik = '$nik'
            AND nama = '$nama';";

    $data = $mysqli->query($query) or die($mysqli->error);

    // Check apakah users tersebut terdaftar atau tidak
    if ($data->num_rows != 0) {
        $row = mysqli_fetch_object($data);
        $_SESSION["nik"] = $row->nik;
        $_SESSION["nama"] = $row->nama;

        $alert = "<div class='alert alert-success'>Anda berhasil masuk</div>";
        echo "<meta http-equiv='refresh', content='1; url=index.php'>";
    } else {
        $alert = "<div class='alert alert-danger'>Mohon periksa kembali NIK dan Nama Anda</div>";
    }
}

include "views/v_login.php";
