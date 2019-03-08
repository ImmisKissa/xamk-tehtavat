<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot2c</title>
</head>
<body>
    <form action="ot2c.php" action="POST">
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

    $nimi = $_POST['nimi'];
    $maara = $_POST['maara'];

   
}

?>
</body>
</html>