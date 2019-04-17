<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5a</title>
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

$kysely = $yhteys->prepare("SELECT joukkue, ottelut, voitot, tasapelit, tappiot, pisteet FROM sarjataulukko");
    $kysely->execute();
    
    echo '<table border="1">';
	echo "<tr><th>joukkue</th><th>ottelut</th><th>voitot</th><th>tasapelit</th><th>tappiot</th><th>pisteet</th></tr>";
    while ($rivi = $kysely->fetch()) {
		echo "<tr>";
        echo "<td>" . $rivi['joukkue'] . "</td><td>" . $rivi['ottelut'] . "</td><td>" . $rivi['voitot'] . "</td><td>" . $rivi['tasapelit'] . 
        "</td><td>" . $rivi['tappiot'] . "</td><td>" . $rivi['pisteet'] . "</td>"; 
		echo "</tr>";
	}
	echo '</table>';
?>
    
</body>
</html>