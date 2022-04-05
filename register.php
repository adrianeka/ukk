<?php
include "db/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nik = $_POST["nik"];
    $nama = $_POST["nama"];

    $query = "SELECT * FROM user WHERE nik =" . $nik;

    $result = $mysqli->query($query) or die($mysqli->error);

    if ($result->num_rows == 0) {
        $query = "INSERT INTO user (nik, nama) VALUES ('$nik', '$nama')";

        $mysqli->query($query) or die($mysqli->error);

        $alert = "<div class='alert alert-success'>Anda berhasil bergabung</div>";
        echo "<meta http-equiv='refresh' , content='1; url=index.php'>";
    } elseif ($result->num_rows != 0) {
        $alert = "<div class='alert alert-danger'>Anda gagal membuat akun</div>";
    } else {
        echo "ini kalo else";
    }
}
include "views/v_register.php";
