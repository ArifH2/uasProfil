<?php
include 'koneksi.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the form data
    $id = $_POST['id'];
    $mengerti = $_POST['mengerti'];
    $email = $_POST['email'];
    $tahun_sekarang = $_POST['tahun_sekarang'];
    $nama_rekomendasi = $_POST['nama_rekomendasi'];
    $jabatan = $_POST['jabatan'];
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $studi = $_POST['studi'];
    $fakultas = $_POST['fakultas'];
    $ipk = $_POST['ipk'];
    $menjadi = $_POST['menjadi'];
    $tahun_akademik = $_POST['tahun_akademik'];

    // Update the record in the database
    $query = "UPDATE suratrekomendasi SET mengerti='$mengerti', email='$email', tahun_sekarang='$tahun_sekarang', nama_rekomendasi='$nama_rekomendasi', 
    jabatan='$jabatan', nidn='$nidn', nama='$nama', nim='$nim', 
    studi='$studi', fakultas='$fakultas', ipk='$ipk', menjadi='$menjadi', tahun_akademik='$tahun_akademik' WHERE id='$id'";

    $result = mysqli_query($kon, $query);

    // Check if update was successful
    if ($result) {
        // Redirect back to the main page with a success message
        header("Location: index.php?pesan=success");
        exit();
    } else {
        // Display an error message
        echo "Error updating record: " . mysqli_error($kon);
    }
} else {
    // Get the ID parameter from the URL
    $id = $_GET['id'];

    // Retrieve the record from the database
    $query = "SELECT * FROM suratrekomendasi WHERE id='$id'";
    $result = mysqli_query($kon, $query);
    $row = mysqli_fetch_array($result);

    // Check if the record exists
    if (mysqli_num_rows($result) > 0) {
        $id = $row['id'];
        $mengerti = $row['mengerti'];
        $email = $row['email'];
        $tahun_sekarang = $row['tahun_sekarang'];
        $nama_rekomendasi = $row['nama_rekomendasi'];
        $jabatan = $row['jabatan'];
        $nidn = $row['nidn'];
        $nama = $row['nama'];
        $nim = $row['nim'];
        $studi = $row['studi'];
        $fakultas = $row['fakultas'];
        $ipk = $row['ipk'];
        $menjadi = $row['menjadi'];
        $tahun_akademik = $row['tahun_akademik'];
    } else {
        // Display an error message if the record doesn't exist
        echo "Record not found.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Form Rekomendasi Kampus</title>
</head>
<body>

    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  padding: 20px;
}

h2 {
  color: #333;
  text-align: center;
}

form {
  margin: 0 auto;
  max-width: 600px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
}

form label {
  display: block;
  margin-bottom: 10px;
}

form input[type="text"],
form input[type="number"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}

form input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  border: none;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
}

form input[type="radio"] {
  margin-right: 5px;
}
    </style>
    
    <h2>Edit Form Rekomendasi</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="mengerti">CONTOH PENGISIAN DI SETIAP FORM</label>
            <br>
            <label for="mengerti">Deskripsi yang Benar :</label>
            <br>
            <label for="mengerti">1) Salam Patriot, Gagah Berani Tangguh :</label>
            <br>
            <label for="mengerti">2) Pasuruan, 1 Januari 2022</label>
            <br>
            <br>
            <label for="mengerti">Deskripsi yang  Salah :</label>
            <br>
            <label for="mengerti">1) Salam patriot, gagah berani tangguh :</label>
            <br>
            <label for="mengerti">2) SALAM PATRIOT, GAGAH BERANI TANGGUH</label>
            <br>
            <label for="mengerti">3) Pasuruan, 1 januari 2022</label>
            <br>
            <label for="mengerti">4) PASURUAN, 1 JANUARI 2022</label>
            <br>
            <br>
            <label>
                <input type="radio" name="mengerti" value="Mengerti" required="required">
                Mengerti
            </label>
            <br>
            <label>
                <input type="radio" name="mengerti" value="Tidak Mengerti, Saya Harus Konsultasi Ke BAAK" required="required">
                Tidak Mengerti, Saya Harus Konsultasi Ke BAAK
            </label>
            <br>
            <br>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="contoh@gmail.com" required="required">
            <br>
            <br>
                <label for="tahun_sekarang">Masukkan Tahun Sekarang</label>
                <input class="angka" type="number" name="tahun_sekarang" placeholder="Masukkan Tahun Sekarang" required="required">
            <br>
            <br>
                <label for="nama_rekomendasi">NAMA Yang Merekomendasi</label>
                <input type="text" name="nama_rekomendasi" placeholder="Masukkan NAMA Yang Merekomendasi" required="required">
            <br>
            <br>
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" placeholder="Masukkan Jabatan" required="required">
            <br>
            <br>
                <label for="nidn">Masukkan NIDN</label>
                <input class="angka" type="number" name="nidn" placeholder="Masukkan NIDN" required="required">
            <br>
            <br>
                <label for="nama">Masukkan Nama(Mahasiswa)</label>
                <input type="text" name="nama" placeholder="Masukkan Nama(Mahasiswa)" required="required">
            <br>
            <br>
                <label for="nim">Masukkan NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM" required="required">
            <br>
            <br>
                <label for="studi">Studi</label>
            <br>
                <label>
                <input type="radio" name="studi" value="Pendidikan Agama Islam" required="required">
                Pendidikan Agama Islam
                </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Pendidikan Bahasa dan Sastra Indonesia" required="required">
                Pendidikan Bahasa dan Sastra Indonesia
                 </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Pendidikan Bahasa Inggris" required="required">
                Pendidikan Bahasa Inggris
                </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Pendidikan Matematika" required="required">
                Pendidikan Matematika
                </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Pendidikan Ekonomi" required="required">
                Pendidikan Ekonomi
                </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Pendidikan Pancasila dan Kewarganegaraan" required="required">
                Pendidikan Pancasila dan Kewarganegaraan
                </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Ilmu Komputer" required="required">
                Ilmu Komputer
                </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Teknologi Pangan" required="required">
                Teknologi Pangan
                </label>
            <br>
                <label>
                <input type="radio" name="studi" value="Teknik Industri" required="required">
                Teknik Industri
                </label>
            <br>
            <br>
                <label for="fakultas">Fakultas</label>
            <br>
                <label>
                <input type="radio" name="fakultas" value="Pedagogi dan Psikologi" required="required">
                Pedagogi dan Psikologi
                </label>
            <br>
                <label>
                <input type="radio" name="fakultas" value="Teknologi dan Sains" required="required">
                Teknologi dan Sains
                </label>
            <br>
                <label>
                <input type="radio" name="fakultas" value="Agama islam" required="required">
                Agama islam
                </label>
            <br>
            <br>
                <label for="semester">Semester</label>
            <br>
                <label>
                <input type="radio" name="semester" value="I(Satu)" required="required">
                I(Satu)
                </label>
            <br>
                <label>
                <input type="radio" name="semester" value="II(Dua)" required="required">
                II(Dua)
                </label>
            <br>
                <label>
                <input type="radio" name="semester" value="III(Tiga)" required="required">
                III(Tiga)
                </label>
            <br>
                <label>
                <input type="radio" name="semester" value="IV(Empat)" required="required">
                IV(Empat)
                </label>
            <br>
                <label>
                <input type="radio" name="semester" value="V(Lima)" required="required">
                V(Lima)
                </label>
            <br>
                <label>
                <input type="radio" name="semester" value="VI(Enam)" required="required">
                VI(Enam)
                </label>
            <br>
                <label>
                <input type="radio" name="semester" value="VII(Tujuh)" required="required">
                VII(Tujuh)
                </label>
            <br>
                <label>
                <input type="radio" name="semester" value="VIII(Delapan)" required="required">
                VIII(Delapan)
                </label>
            <br>
            <br>
                <label for="ipk">Masukkan IPK</label>
                <input type="text" name="ipk" placeholder="Masukkan IPK" required="required">
            <br>
            <br>
                <label for="menjadi">UNTUK MENJADI ? (Ditulis secara lengkap dan benar)</label>
                <input type="text" name="menjadi" placeholder="UNTUK MENJADI ? (Ditulis secara lengkap dan benar)" required="required">
            <br>
            <br>
                <label for="tahun_akademik">TAHUN AKADEMIK (Contoh : 2021-2022)</label>
                <input type="text" name="tahun_akademik" placeholder="Masukkan TAHUN AKADEMIK (Contoh : 2021-2022)" required="required">
            <br>
            <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
