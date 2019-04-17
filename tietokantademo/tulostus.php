<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Tietokannasta tulostus</h2>

<?php
//Ohjelma tulostaa tietokantaan tallennetut tiedot 
include("tietokantayhteys.php"); //Avataan yhteys kantaan
//************************************************
//HAETAAN TIETOKANNASTA etunimi, sukunimi ja puhelinnumero
	$kysely = $yhteys->prepare("SELECT etunimi, sukunimi, puhelin FROM Ihmiset");  //haetaan tarvittavat tiedot
	$kysely->execute(); //suoritetaan sql-lause eli haku kannasta. $kysely tulosjoukko (resultset). Se on array-muuttuja, jossa on haetut tiedot assosiatiivisessa taulukossa (kenttien nimet toimivat avaimina)
	//Tulostus
	echo '<table border="1">';
	echo "<tr><th>etunimi</th><th>sukunimi</th><th>puhelin</th></tr>"; //tulostetaan rivin kentät selaimelle
    while ($rivi = $kysely->fetch()) { // käydään kaikki tulosjoukon rivit läpi. $rivi on taulukon yksi rivi eli yhden henkilän tiedot
		echo "<tr>";
		echo "<td>" . $rivi['etunimi'] . "</td><td>" . $rivi['sukunimi'] . "</td><td>" . $rivi['puhelin'] . "</td>"; //tulostetaan rivin kentät selaimelle
		echo "</tr>";
	}
	echo '</table>';
?>
</body>
</html>












