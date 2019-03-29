<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot4c</title>
</head>
<body>
    
<form action="ot4c.php" method="POST">
    <label for="hetu"></label>
        <p>Syötä henkilötunnus: <input type="text" name="hetu"></p>
        <input type="submit">
</form>

<?php

if (isset($_POST['hetu'])) {
    $hetu = $_POST['hetu'];

    function hetuVuosi($hetu) {
        
    }
}

?>

</body>
</html>