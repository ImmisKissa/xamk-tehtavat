<?php

$yhteys = "mysql:host=localhost;dbname=veikkausliiga";
$kayttajatunnus = "root";
$salasana = "";

try {
	$yhteys = new PDO($yhteys, $joukkue, $ottelut, $voitot, $tasapelit, $tappiot, $pisteet);
	$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$yhteys->exec("SET CHARACTER SET utf8;");
}
catch (PDOException $e) {
	die("Tietokantaan ei saada yhteyttä. Virhe: ".$e);
}

?>