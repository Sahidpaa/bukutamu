<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "db-bukutamu";

$koneksi = new Mysqli($host, $user, $password, $db);

if($koneksi->connect_error){
    echo "koneksi gagal";}
?>