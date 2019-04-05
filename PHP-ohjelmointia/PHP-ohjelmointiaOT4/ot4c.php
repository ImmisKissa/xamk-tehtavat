<?php 
function tarkistaHetu($hetu){

    $vuosi = substr($hetu,4,2);
    $vuosisataMerkki = substr($hetu,6,1);

    if ($vuosisataMerkki === "A") {
        $vuosisata = "20";
    } elseif ($vuosisataMerkki === "-") {
        $vuosisata = "19";
    } else {
        $vuosisata = "18";
    }

    if (substr($hetu,4,3)) {
        
        return $vuosisata . $vuosi;
    } 
    
}
?>
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
        <input type="submit" value="Tulosta">
</form>

<?php

if (isset($_POST['hetu'])) {
    $hetu = $_POST['hetu'];
    echo tarkistaHetu($hetu);
}


?>

</body>
</html>