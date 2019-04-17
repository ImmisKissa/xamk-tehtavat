<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Tietokannasta haku</h2>
<form method="post" action="">
Id: <input name="id">
<input type="submit" name="hakunappi" value="Hae">
</form>
<?php
//Ohjelma hakee tietokannasta ja tulostaa halutun henkilön puhelinnumeron 
include("tietokantayhteys.php"); //Avataan yhteys kantaan
//************************************************
//HAETAAN TIETOKANNASTA HALTUN HENKILÖN PUHELINNUMERO (haku id:n perusteella)
if(isset($_REQUEST['id'])) {
	/*Lomakkeelta tulevaa tietoa ei saa tietoturvasyistä (sql-injektion riski) sijoittaa suoraan SQL-lauseeseen
	vaan sidotaan muuttuja ja sql-parametri toisiinsa bindParam-funktiolla.
    :id on ns. placeholder eli parametri
	*/
	$kysely = $yhteys->prepare("SELECT puhelin FROM Ihmiset WHERE id= :id"); 
	$id=$_REQUEST['id']; //lomakkeelta tuleva tieto
	$kysely->bindParam(":id",$id); //kerrotaan ohjelmalle, mikä muuttuja vastaa parametria :id
	$kysely->execute(); //suoritetaan sql-lause eli haku kannasta. Tuloksena on $kysely-niminen array eli tulosjoukko (resultset)
	//Tulostus
	$rivi=$kysely->fetch();  //evitään arraysta yksi rivi (row)
	echo "Puhelin: ".$rivi['puhelin']; //tulostetaan vain puhelinnumero-kenttä (field)
}
?>
</body>
</html>












