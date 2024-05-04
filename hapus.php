<?php
// membuat koneksi ke database
$kon = mysqli_connect("localhost", "root","", "uasyuyun");

// memeriksa apakah koneksi berhasil atau tidak
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// mengambil nilai ID dari parameter URL
$id = $_GET['id'];

// menghapus data dari tabel
$query = "DELETE FROM suratrekomendasi WHERE id = $id";
mysqli_query($kon, $query);

// menutup koneksi ke database
mysqli_close($kon);

header('location:http://localhost/yuyunuas/index.php');
?>