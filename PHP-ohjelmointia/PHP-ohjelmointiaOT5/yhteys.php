<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5a2</title>
</head>
<body>
    
<?php

$yhteys = "mysql:host=localhost;dbname=veikkausliiga";
$kayttajatunnus = "root";
$salasana = "";

try {
	$yhteys = new PDO($yhteys, $kayttajatunnus, $salasana);
	$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$yhteys->exec("SET CHARACTER SET utf8;");
}
catch (PDOException $e) {
	die("Tietokantaan ei saada yhteyttä. Virhe: ".$e);
}

?>

</body>
</html>