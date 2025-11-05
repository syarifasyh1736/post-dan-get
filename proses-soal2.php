<?php
$jumlahUang = $_POST['jumlahUang'];

$a = floor($jumlahUang / 100000);
$sisa = $jumlahUang % 100000;

$b = floor($sisa / 50000);
$sisa %= 50000;

$c = floor($sisa / 20000);
$sisa %= 20000;

$d = floor($sisa / 5000);
$sisa %= 5000;

$e = floor($sisa / 100);
$sisa %= 100;

$f = floor($sisa / 50);

echo "<h2>Hasil Pecahan Uang</h2>";
echo "Jumlah Rp. 100.000 : $a lembar<br>";
echo "Jumlah Rp. 50.000 : $b lembar<br>";
echo "Jumlah Rp. 20.000 : $c lembar<br>";
echo "Jumlah Rp. 5.000 : $d lembar<br>";
echo "Jumlah Rp. 100 : $e koin<br>";
echo "Jumlah Rp. 50 : $f koin<br>";
?>
