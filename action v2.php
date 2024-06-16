<?php
$nama = $_POST['nama'];
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];

$tambah = $angka1 + $angka2;
$kurang = $angkal - $angka2; 
$perkalian = $angkal * $angka2;
$pembagian = $angkal / $angka2;
$modulus  = $angka1 % $angka2;

echo "<h2> Perhitungan Aritmatika </h2>"; 
echo "$angka1 + $angka2 = $tambah";
echo "<br>$angkal - $angka2 = $kurang";
echo "<br>$angka1 * $angka2 = $perkalian"; 
echo "<br>$angka1 / $angka2 = $pembagian"; 
echo "<br>$angka1 % $angka2 = $modulu$";
?>
