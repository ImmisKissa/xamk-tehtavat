<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot4a</title>
</head>
<body>

<form action="ot4a.php" method="POST">
    <label for="numero"></label>
        <p>Laita numero: <input type="text" name="numero"></p>
        <input type="submit" value="Tulosta">
</form>
    
<?php

$errors = [];

if (isset($_POST['numero'])) {

    function laskeNelio($n) {
        return $n * $n;
    }


    $numero = $_POST['numero'];

    
    if (is_numeric($numero)) {
        echo laskeNelio($numero);
    } else {
        $errors[] = "Ilmoita numero!";
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