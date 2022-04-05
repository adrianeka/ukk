<?php 

include "library.php";

$host = "localhost" ; 
$user = "root" ;
$pass = "";
$db = "ukk";

$mysqli = mysqli_connect($host,$user,$pass,$db) or die("Tidak dapat tersambung ke database");

?>