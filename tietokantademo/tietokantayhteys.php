<?php
//Yhteys kantaan: tietokantamoottori, ip-osoite,tietokannan nimi
$yhteys = "mysql:host=localhost;dbname=demokanta"; //Voi vaihtaa tietokantamoottorin (esim. mariadb:hen tai oracleen)
$kayttajatunnus = "root";
$salasana = "";
//virhetarkistus päälle eli poikkeuksien hallinta
try {
	$yhteys = new PDO($yhteys, $kayttajatunnus, $salasana); //luodaan yhteys -olio PDO -luokasta
	$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$yhteys->exec("SET CHARACTER SET utf8;");//Varmistetaan merkistö
}
catch (PDOException $e) {
	die("Tietokantaan ei saada yhteyttä. Virhe: ".$e);
}
?>