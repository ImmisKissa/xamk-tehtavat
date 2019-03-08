<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot2c</title>
</head>
<body>
    <form action="ot2c.php" method="POST">
        <label for="nimi"></label>
        <p>Nimi:</p>
        <input type="text" name="nimi">
        <label for="maara"></label>
        <p>Montako kertaa tulostetaan:</p>
        <input type="text" name="maara"><br>
        <input type="submit" value="Tulosta">
    </form>

<?php

if (isset($_POST['nimi']) && (isset($_POST['maara']))) {

    if(isset($_POST['nimi'])) {
        $nimi = $_POST['nimi'];
    }

    if (isset($_POST['maara'])) {
        $maara = $_POST['maara'];
        if (is_numeric($maara)) {

        }
    }

    for ($x = 1; $x <= $maara; $x++) {
        echo "$nimi <br>";
    }
}

?>
</body>
</html>