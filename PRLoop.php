<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="PRLoop.php">
        Input jumlah anak ayam: <br>
        <input type="text" name="jumlah">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if ($_POST) {
        // code yang ingin di eksekusi
        echo 'Jumlah: ' . $_POST['jumlah'] . "<br>";
        if ($_POST['jumlah'] <= 0) {
            echo "input jumlah salah";
        } else {
            echo "anak ayam turun " . $_POST['jumlah'] . "<br>";
            for ($i = $_POST['jumlah']; $i > 0; $i--) {
                if ($i != 1) {
                    echo "anak ayam turun " . $i . " mati satu tinggal " . ($i - 1) . "<br>";
                } else {
                    echo "anak ayam turun " . $i . " mati satu tinggal induknya";
                }
            }
        }
    }
    ?>

</body>

</html>