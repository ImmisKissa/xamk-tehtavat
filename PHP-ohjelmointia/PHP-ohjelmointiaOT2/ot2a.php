<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot2a</title>
</head>
<body>
    
    <form action="ot2a.php" method="POST">
        <label for="pituus"></label>
        <p>Pituus: <input type="text" name="pituus">cm</p>
        <label for="paino"></label>
        <p>Paino: <input type="text" name="paino">kg</p>
        <input type="submit" value="Laske painoindeksi">
    </form>

<?php

if (isset($_POST['pituus']) && (isset($_POST['paino']))) {

    if (isset($_POST['pituus'])) {
        $pituus = $_POST['pituus'];
        if (is_numeric($pituus)) {

        }
    }

    if (isset($_POST['paino'])) {
        $paino = $_POST['paino'];
        if (is_numeric($paino)) {

        }
    }

    $summa = $paino / (($pituus / 100) * ($pituus / 100));
    $summa = round($summa,1);
    echo "<h3>Painoindeksisi on $summa</h3>";

    if ($summa < 18.4) {
        echo "Alhainen paino";
    } elseif ($summa < 24.9) {
        echo "Normaali paino";
    } elseif ($summa < 29.9) {
        echo "Lievä ylipaino";
    } else {
        echo "Merkittävä ylipaino";
    }

}

?>
</body>
</html>