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
        echo (explode(";", $rivi));
        $myfile = "<h1>$rivi[0]</h1>";
        $myfile = "<p>$rivi[1]</p>";
    }
}

fclose($myfile);

?>

</body>
</html>