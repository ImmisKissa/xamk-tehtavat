<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5a</title>
</head>
<body>

<?php

include("yhteys.php");

$kysely = $yhteys->prepare("SELECT joukkue, voitot, tasapelit, tappiot FROM sarjataulukko");
    $kysely->execute();
    
    echo '<table border="1">';
	echo "<tr><th>joukkue</th><th>ottelut</th><th>voitot</th><th>tasapelit</th><th>tappiot</th><th>pisteet</th></tr>";
    while ($rivi = $kysely->fetch()) {

		$ottelut = $rivi['voitot'] + $rivi['tasapelit'] + $rivi['tappiot'];
		$pisteet = $rivi['voitot'] * 3 + $rivi['tasapelit'] * 1;

		echo "<tr>";
        echo "<td>" . $rivi['joukkue'] . "</td><td>" . $ottelut . "</td><td>" . $rivi['voitot'] . "</td><td>" . $rivi['tasapelit'] . "</td><td>" . $rivi['tappiot'] . "</td><td>" . $pisteet . "</td>"; 
		echo "</tr>";
	}
	echo '</table>';
?>
    
</body>
</html>