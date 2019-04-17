<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Tietokantaan lisäys</h2>
<?php
//Lisäysohjelma. Ohjelmassa ei ole tyylejä eikä tietojen oikeellisuuden tarkistuksia.
//Tarkoitus on demota mahdollisimman yhksinkertaisella esimerkillä tietokannan liittämistä PHP-ohjelmaan-
include("tietokantayhteys.php");
if(isset($_REQUEST['lisaysnappi']))
{
	//Lomakkeelta tulevat tiedot
	$etunimi=$_REQUEST['etunimi'];
	$sukunimi=$_REQUEST['sukunimi'];
	$puhelin=$_REQUEST['puhelin'];
	$kotikunta=$_REQUEST['kotikunta'];
	$syntymavuosi=$_REQUEST['syntymavuosi'];
	//Lisätään kantaan. PHP:n muuttujat sidotaan SQL-parametreihin bindParam-metodilla
	$kysely=$yhteys->prepare("INSERT INTO ihmiset (etunimi,sukunimi,kotikunta,puhelin,syntymavuosi) VALUES (:etunimi, :sukunimi, :kotikunta,:puhelin, :syntymavuosi)");
	//Tietoturvasyistä SQL-lauseeseen ei kirjoiteta suoraan lomakkeelta tulleita tietoja (SQL-injektion vaara)
	$kysely->bindParam(":etunimi",$etunimi);
	$kysely->bindParam(":sukunimi",$sukunimi);
	$kysely->bindParam(":kotikunta",$kotikunta);
	$kysely->bindParam(":puhelin",$puhelin);
	$kysely->bindParam(":syntymavuosi",$syntymavuosi);
	$kysely->execute();//Ajetaan SQL-lause kantaan
}

?>
<form method="post" action="">
Etunimi:<input name="etunimi"><br/>
Sukunimi:<input name="sukunimi"><br/>
Puhelin:<input name="puhelin"><br/>
Kotikunta:<input name="kotikunta"><br/>
Syntymavuosi:<input name="syntymavuosi"><br/><br/>
<input type="submit" name="lisaysnappi" value="Lisää">
</form>
</body>
</html>