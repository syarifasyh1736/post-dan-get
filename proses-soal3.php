<?php
$nama = $_POST['nama'] ?? '';
$tempat = $_POST['tempat'] ?? '';
$tgl = $_POST['tgl'] ?? '';
$bln = $_POST['bln'] ?? '';
$thn = $_POST['thn'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$jk = $_POST['jk'] ?? '';
$sekolah = $_POST['sekolah'] ?? '';
$nilai = $_POST['nilai'] ?? '';

if ($nama) {
  echo "<h2>Terimakasih $nama sudah mengisi form pendaftaran.</h2>";
  echo "Nama Lengkap : $nama<br>";
  echo "Tempat Lahir : $tempat<br>";
  echo "Tanggal Lahir : $tgl - $bln - $thn<br>";
  echo "Alamat Rumah : $alamat<br>";
  echo "Jenis Kelamin : $jk<br>";
  echo "Asal Sekolah : $sekolah<br>";
  echo "Nilai UAN : $nilai<br>";
} else {
  echo "<h3>Silakan isi form pendaftaran terlebih dahulu di <a href='soal3.php'>soal3.php</a>.</h3>";
}
?>
