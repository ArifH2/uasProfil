<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "uasyuyun";
$kon = mysqli_connect( $host, $user, $pwd, $db );

// Mengecek koneksi
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }
?>