<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Aritmatika</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angkaPertama = $_POST['angkaPertama'];
    $angkaKedua = $_POST['angkaKedua'];
    $nama = $_POST['nama'];

    $hasilTambah = $angkaPertama + $angkaKedua;
    $hasilKurang = $angkaPertama - $angkaKedua;
    $hasilKali = $angkaPertama * $angkaKedua;
    $hasilBagi = $angkaPertama / $angkaKedua;
    $hasilModulo = $angkaPertama % $angkaKedua;

    echo "Perhitungan Aritmatika<br>";
    echo "Nama : " . $nama . "<br>";
    echo "$angkaPertama + $angkaKedua = " . $hasilTambah . "<br>";
    echo "$angkaPertama - $angkaKedua = " . $hasilKurang . "<br>";
    echo "$angkaPertama * $angkaKedua = " . $hasilKali . "<br>";
    echo "$angkaPertama / $angkaKedua = " . $hasilBagi . "<br>";
    echo "$angkaPertama % $angkaKedua = " . $hasilModulo . "<br>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Masukkan nama anda: <input type="text" name="nama"><br>
    Masukkan angka pertama (1-10): <input type="number" name="angkaPertama"><br>
    Masukkan angka kedua (1-10): <input type="number" name="angkaKedua"><br>
    <input type="submit" name="hitung" value="Hitung">
</form>
</body>
</html>
