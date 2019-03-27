<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot3d</title>
</head>
<body>    

<?php

$myfile = fopen("palautteet.txt", "r") or die ("Tiedostoa ei voida avata!");

while(!feof($myfile)) {
    $rivi = fgets($myfile);

    if(strlen($rivi) > 0) {
        $rivi = explode(";", $rivi);
        $nimi = "<h1>$rivi[0]</h1>";
        $viesti = "<p>$rivi[1]</p>";

        echo "$nimi $viesti";
    }
}

fclose($myfile);

?>

</body>
</html>