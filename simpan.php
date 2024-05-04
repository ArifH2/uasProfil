<?php
include "koneksi.php";

$q = "INSERT INTO suratrekomendasi SET ";
$q .= "mengerti = '".$_POST['mengerti']."', ";
$q .= "email = '".$_POST['email']."', ";
$q .= "tahun_sekarang = ".$_POST['tahun_sekarang'].", ";
$q .= "nama_rekomendasi = '".$_POST['nama_rekomendasi']."', ";
$q .= "jabatan = '".$_POST['jabatan']."', ";
$q .= "nidn = ".$_POST['nidn'].", ";
$q .= "nama = '".$_POST['nama']."', ";
$q .= "nim = '".$_POST['nim']."', ";
$q .= "studi = '".$_POST['studi']."', ";
$q .= "fakultas = '".$_POST['fakultas']."', ";
$q .= "semester = '".$_POST['semester']."', ";
$q .= "ipk = '".$_POST['ipk']."', ";
$q .= "menjadi = '".$_POST['menjadi']."', ";
$q .= "tahun_akademik = '".$_POST['tahun_akademik']."'";

$sql = mysqli_query($kon, $q);

if ($sql) {
    header('Location: http://localhost/yuyunuas/index.php');
    exit;
}
?>