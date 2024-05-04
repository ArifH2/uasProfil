<?php
include "koneksi.php";

$sql = "SELECT * FROM suratrekomendasi ORDER BY nama ASC";
$sql_q = mysqli_query($kon,$sql);
if( ! $sql_q)
{
    echo"Query gagal";
}
session_start();
if(isset($_POST['logout'])) {
  session_destroy();
  header("Location: login.html");
}

?>
<div class="index">
<link rel="stylesheet" type="text/css" href="style.css">
<header class="surat">
    <div class="official">
        <h1>
            <h1>
            <center> Universitas PGRI Wiranegara</center>
            <center> (UNIWARA)</center>
            </h1>
            <br>
            <h1>
            <center>Surat Rekomendasi Kampus</center>
            </h1>
            <h4>
            <center>BIRO ADMINISTRASI AKADEMIK DAN KEMAHASISWAAN</center>
            </h4>
        </h1>
    </div>
</div>
</header>
<a href="form.html" name="submit" class="form">Input Data</a>
<table border="1px" width="100%">
    <tr align="center">
        <th>No</th>
        <th>Pengisian Di Setiap Form</th>
        <th>Email</th>
        <th>Tahun Sekarang</th>
        <th>NAMA Yang Merekomendasi</th>
        <th>Jabatan</th>
        <th>NIDN</th>
        <th>Nama(Mahasiswa)</th>
        <th>NIM</th>
        <th>Program Studi</th> 
        <th>Fakultas</th>
        <th>Semester</th>
        <th>IPK</th>
        <th>UNTUK MENJADI</th>
        <th>TAHUN AKADEMIK</th>
        <th>Aksi</th>
    </tr>
    <?php
			$no = 1;//untuk pengurutan nomor 				
			//melakukan perulangan
			while($row = mysqli_fetch_array($sql_q)) {
		?>				
		<tr>
		    <td><?= $no; ?></td>
            <td><?= $row['mengerti']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['tahun_sekarang']; ?></td>
            <td><?= $row['nama_rekomendasi']; ?></td>
            <td><?= $row['jabatan']; ?></td>
            <td><?= $row['nidn']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['studi']; ?></td>
            <td><?= $row['fakultas']; ?></td>
            <td><?= $row['semester']; ?></td>
            <td><?= $row['ipk']; ?></td>
            <td><?= $row['menjadi']; ?></td>
            <td><?= $row['tahun_akademik']; ?></td>
			<td>
		        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
				<a href="hapus.php?id=<?= $row['id']; ?>"class="btn btn-sm btn-danger"
				onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
			</td>
		</tr>
        <?php $no++; } ?>
    </table>
<form method="post">
    <a href="beranda.html" class="back-button">Kembali ke Halaman Beranda</a>
    <button type="logout" name="logout">Logout</button>
</form>