<?php

$yhteys = "mysql:host=localhost;dbname=tiedot";
$kayttajatunnus = "root";
$salasana = "";

try {
	$yhteys = new PDO($yhteys, $kayttajatunnus, $salasana );
	$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$yhteys->exec("SET CHARACTER SET utf8;");
}
catch (PDOException $e) {
	die("Tietokantaan ei saada yhteyttä. Virhe: ".$e);
}

?>