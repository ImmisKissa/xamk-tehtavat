<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot2b</title>
</head>
<body>
    <h1>Ilmapallokauppa</h1>
        <form action="ot2b.php" method="POST">
            <p>Ilmapallojen lukumäärä: <input type="text" name="maara"></p>
            <input type="submit" value="Tulosta kuitti">
        </form>

<?php

if (isset($_POST['maara'])) {
    
    $maara = $_POST['maara'];
    
    if (is_numeric($maara)) {
        $summa = $maara * 1.50;
    
        if ($maara > 15) {
            $alennus = $summa * 0.1;
        } else {
            $alennus = 0;
        }
    
        $loppu = $summa - $alennus;
    
        echo "Palloja: $maara kpl<br>";
        echo "Kappalehinta: 1.50 €<br>";
        echo "Loppusumma: $summa €<br>";
        echo "Alennus: $alennus €<br>";
        echo "<h3>Maksettava: $loppu.00 €</h3>";
    } else {
        echo "Määritä luku! Ei sanaa!";
    }
}

?>
</body>
</html>