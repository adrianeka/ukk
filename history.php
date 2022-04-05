<?php

//mengambil data perjalanan user
// $sql = "SELECT * FROM catatan WHERE nik='$_SESSION[nik]'";
// $result = $mysqli->query($sql);

$data = mysqli_query($mysqli,"SELECT * FROM catatan WHERE nik='$_SESSION[nik]'");
$limitData = mysqli_query($mysqli,"SELECT * FROM catatan WHERE nik='$_SESSION[nik]' LIMIT 5");

//menghitung total catatan_perjalanan
$count = mysqli_num_rows($data);