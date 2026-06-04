<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <span>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $angka1 = isset($_POST["Angka1"]) ? floatval($_POST["Angka1"]) : null;
                    $angka2 = isset($_POST["Angka2"]) ? floatval($_POST["Angka2"]) : null;
                    $lambang = "";

                    if ($angka1 !== null && $angka2 !== null && is_numeric($angka1) && is_numeric($angka2)) {
                        if ($angka1 > $angka2) {
                            $lambang = ">";
                        } elseif ($angka1 < $angka2) {
                            $lambang = "<";
                        } else {
                            $lambang = "=";
                        }
                        echo "<strong style='color: yellow; font-size: 64px;'>$lambang</strong>";
                    }
                }
            ?>
        </span>
        <h2>Cek Perbandingan Angka <span id="Lambang"></span></h2>

        <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($angka1 !== null && $angka2 !== null && is_numeric($angka1) && is_numeric($angka2)) {
                        if ($angka1 > $angka2) {
                            $hasil = "$angka1 lebih besar dari $angka2";
                        } elseif ($angka1 < $angka2) {
                            $hasil = "$angka1 lebih kecil dari $angka2";
                        } else {
                            $hasil = "$angka1 sama jumlah dengan $angka2";
                        }
                        echo "<div class='result' id='hasil'>$hasil</div>";
                    } else {
                        echo "<div class='result' id='hasil'>Isi kedua angka Terlebih dahulu</div>";
                    }
                }
        ?>
    </div>

    <form action="">
        <input type="number" name"angka1" placeholder="Angka Pertama" required>
        <input type="number" name"angka2" placeholder="Angka Kedua" required>
        <button type="submit">Check</button>
    </form>

</body>
</html>