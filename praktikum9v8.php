<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9</title>
</head>

<body>
    <form method="POST" action="action.php">
        Nama Anda = <input type="text" name="namaku"><br>
        Masukkan angka pertama (1-10) = <input type="text" name="emailku"><br>inp
        Masukkan angka kedua (1-10) = <input type="text" name>
</input><br>
        <input type="submit" name="kirim" value="sent">
    </form>
    <?php
    if (isset($_POST['kirim'])) {
        echo "Nama Anda : $_POST[namaku]<br>";
        echo "Email Anda : $_POST[emailku]<br>";
        echo "Alamat Anda : $_POST[alamatku]<br>";
    }
    ?>
</body>

</html>