<?php
//Ohjelma hakee tietokannan taulusta kaikki tiedot ja lähettää ne selaimelle JSON-muodossa

$dsn = "mysql:host=localhost;dbname=demokanta";
$tunnus = "root";
$salasana = "";
//Tietokantayhteys
try {
	$yhteys = new PDO($dsn, $tunnus, $salasana);		
} catch (PDOExcetion $e) {
	die("Virhe: ".$e->getMessage());
}

$yhteys->exec("SET NAMES utf8");
//ajetaan SQL-lause
$kysely = $yhteys->prepare("SELECT * FROM ihmiset");

$kysely->execute();
//Lähetetään tiedot selaimelle JSON-muodossa
header("Content-type: application/json");
print json_encode($kysely->fetchAll(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
?>