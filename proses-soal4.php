<?php
$nama = $_GET['nama'] ?? '';
$tempat = $_GET['tempat'] ?? '';
$tgl = $_GET['tgl'] ?? '';
$bln = $_GET['bln'] ?? '';
$thn = $_GET['thn'] ?? '';
$alamat = $_GET['alamat'] ?? '';
$jk = $_GET['jk'] ?? '';
$sekolah = $_GET['sekolah'] ?? '';
$nilai = $_GET['nilai'] ?? '';

if ($nama) {
  echo "<h2>Terimakasih $nama sudah mengisi form pendaftaran (GET).</h2>";
  echo "Nama Lengkap : $nama<br>";
  echo "Tempat Lahir : $tempat<br>";
  echo "Tanggal Lahir : $tgl - $bln - $thn<br>";
  echo "Alamat Rumah : $alamat<br>";
  echo "Jenis Kelamin : $jk<br>";
  echo "Asal Sekolah : $sekolah<br>";
  echo "Nilai UAN : $nilai<br>";
  echo "<hr><a href='soal4.php'>Kembali ke Form</a>";
} else {
  echo "<h3>Silakan isi form terlebih dahulu di <a href='soal4.php'>soal4.php</a>.</h3>";
}
?>
