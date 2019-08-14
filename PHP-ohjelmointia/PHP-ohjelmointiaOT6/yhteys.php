<?php

$yhteys = "mysql:host=localhost;dbname=kirjTiedot";
$yhteys = "mysql:host=localhost;dbname=rekisTiedot";
$kayttajatunnus = "root";
$salasana = "";

try {
	$yhteys = new PDO($yhteys, $kayttajatunnus, $salasana, $salasanaUudelleen);
	$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$yhteys->exec("SET CHARACTER SET utf8;");
}
catch (PDOException $e) {
	die("Tietokantaan ei saada yhteyttä. Virhe: ".$e);
}

?>