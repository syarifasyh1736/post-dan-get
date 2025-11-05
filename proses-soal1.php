<?php
$saldoAwal = $_POST['saldoAwal'];
$bunga = $_POST['bunga'] / 100;
$bulan = $_POST['bulan'];

$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

echo "<h2>Hasil Perhitungan</h2>";
echo "Saldo Awal: Rp. $saldoAwal <br>";
echo "Bunga per Bulan: " . ($_POST['bunga']) . "% <br>";
echo "Lama: $bulan bulan<br>";
echo "<b>Saldo Akhir: Rp. $saldoAkhir,-</b>";
?>
