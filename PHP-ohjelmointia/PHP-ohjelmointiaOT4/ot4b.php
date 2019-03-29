<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot4b</title>
</head>
<body>

<form action="ot4b.php" method="POST">
    <label for="ika"></label>
    <p>Syötä ikä: <input type="text" name="ika"></p>
    <input type="submit" value="Tulosta">
</form>
    
<?php

$errors = [];

if (isset($_POST['ika'])) {
    $ika = $_POST['ika'];

    function tarkastaIka($ika) {
        if ($ika >= 18) {
            $ika = true;
        } else {
            $ika = false;
        }
    }

    if ($ika >= 18) {
        echo "Tervetuloa!";
    } else {
        echo "Olet alaikäinen!";
    }

    if (is_numeric($ika)) {
        echo tarkastaIka($ika);
    } else {
        $errors[] = "Syötä ikä!";
    }

    if (count($errors) > 0) {
          
        for ($x = 0; $x < count($errors); $x++) {
        echo $errors[$x] . "<br>";
        }

        die ("");
    } 
}

?>

</body>
</html>