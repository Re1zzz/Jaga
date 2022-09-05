<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_covid";
$connect = mysqli_connect($server, $user, $pass, $database);
if (!$connect) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 ?>