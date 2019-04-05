<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot4d</title>
</head>
<body>
<form action="ot4d.php" method="POST">
    <label for="hinta"></label>
        <p>Aseta hinta: <input type="text" name="hinta"></p>
    <label for="pinta_ala"></label>
        <p>Aseta pinta-ala: <input type="text" name="pinta_ala"></p>
        <input type="submit" value="Tulosta hinta">
</form>

<?php

if (isset($_POST['hinta']) && (isset($_POST['pinta_ala'])) && (isset($_POST['nelio_hinta']))) {

    $hinta = $_POST['hinta'];
    $pinta_ala = $_POST['pinta_ala'];

$errors = [];

    if (is_numeric($hinta)) {
        echo "Hinta: $hinta";
    } else {
        $errors[] = "Aseta hinta numerona!!";
    }

    if (is_numeric($pinta_ala)) {
       echo "Pinta-ala: $pinta_ala";
    } else {
        $errors[] = "Aseta pinta-ala numeroina!!";
    }

        function asetaHinta($hinta) {
            return $hinta;
        }

        function asetaPinta_ala($pinta_ala) {
            return $pinta_ala;
        }

        function laskeNelioHinta($nelio_hinta) {
            return $nelio_hinta;
        }

        if (count($errors) > 0) {
          
            for ($x = 0; $x < count($errors); $x++) {
            echo $errors[$x] . "<br>";
            }
    
            die ("");
        } 

        $nelio_hinta = $hinta * $pinta_ala;

        echo "Neliöhinta: $nelio_hinta";
}

?>
</body>
</html>