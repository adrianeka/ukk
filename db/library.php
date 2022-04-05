<?php

session_start();

// function flash($tipe, $pesan = "")
// {
//     if (empty($pesan)) {
//         $pesan = @$_SESSION[$tipe];
//         unset($_SESSION[$tipe]);
//     } else {
//         $_SESSION[$tipe] = $pesan;
//     }
// }

function checkLogin()
{
    $nik = @$_SESSION["nik"];
    $nama = @$_SESSION["nama"];

    if (!empty($nik) and !empty($nama)) {
        return true;
    }

    return false;
}