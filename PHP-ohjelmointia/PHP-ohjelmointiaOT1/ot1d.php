<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot1d</title>
</head>
<body>
    <h1>Bensapumppu</h1>

        <form action="ot1d.php" method="POST">
            <label for="hinta"></label>
            <p>Litrahinta: <input type="text" name="hinta"></p>
            <label for="maara"></label>
            <p>Litramäärä: <input type="text" name="maara"></p>
            <input type="submit" value="Laske maksettava">
        </form>

<?php

if (isset($_POST['hinta']) && (isset($_POST['maara']))) {

    if (isset($_POST['hinta'])) {
        $hinta = $_POST['hinta'];
        if (is_numeric($hinta)) {
            echo "<p>Litrahinta: $hinta euroa</p>";
        } else {
            die('Hinta ei ollut kelvollinen hinta...');
        }
    }

    if (isset($_POST['maara'])) {
        $maara = $_POST['maara'];
        if (is_numeric($maara)) {
            echo "<p>Litramäärä: $maara litraa</p>";
        } else {
            die('Määrä ei ollut kelvollinen määrä...');
        }
    }

    $summa = $hinta * $maara;
        
    echo "<h3>Maksettava: $summa euroa</h3>";

}

?>
</body>
</html>