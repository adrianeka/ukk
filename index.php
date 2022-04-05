<?php
include "db/koneksi.php";

// Check apakah sudah login atau belum, jika belum
// sistem akan me-redirect ke halaman login.php
if (checkLogin() == false) {
    header("Location: login.php");
}

$page=@$_GET['page'];

include "views/v_index.php";