<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Aritmatika</title>
    <script type="text/javascript">
        function clearAndShowResult(result) {
            document.body.innerHTML = result;
        }
    </script>
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

    $result = "Perhitungan Aritmatika<br>";
    $result .= "Nama : " . $nama . "<br>";
    $result .= "$angkaPertama + $angkaKedua = " . $hasilTambah . "<br>";
    $result .= "$angkaPertama - $angkaKedua = " . $hasilKurang . "<br>";
    $result .= "$angkaPertama * $angkaKedua = " . $hasilKali . "<br>";
    $result .= "$angkaPertama / $angkaKedua = " . $hasilBagi . "<br>";
    $result .= "$angkaPertama % $angkaKedua = " . $hasilModulo . "<br>";

    echo "<script type='text/javascript'>clearAndShowResult(" . json_encode($result) . ");</script>";
    exit();
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