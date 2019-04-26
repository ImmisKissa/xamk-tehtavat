<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5b</title>
</head>
<body>
    <h2>Joukkueen haku</h2>

        <form action="" method="POST">
            Joukkue: <input type="text" name="joukkue">
            <input type="submit" name="hakunappi" value="Hae">
        </form>

<?php

include("yhteys.php");

if(isset($_REQUEST['joukkue'])) {
	
	$kysely = $yhteys->prepare("SELECT joukkue,voitot,tasapelit,tappiot FROM sarjataulukko WHERE joukkue= :joukkue"); 
	$joukkue=$_REQUEST['joukkue'];
	$kysely->bindParam(":joukkue",$joukkue); 
	$kysely->execute(); 
	
    $rivi=$kysely->fetch();  

    $ottelut = $rivi['voitot'] + $rivi['tasapelit'] + $rivi['tappiot'];
	$pisteet = $rivi['voitot'] * 3 + $rivi['tasapelit'] * 1;

    echo "Joukkue: " . $rivi['joukkue'] . "<br>" . "Ottelut: " . $ottelut . "<br>" . "Voitot: " . $rivi['voitot'] . "<br>" . "Tasapelit: " . $rivi['tasapelit'] . "<br>" . "Tappiot: " . $rivi['tappiot'] . "<br>" . "Pisteet: " . $pisteet;
}

?>
</body>
</html>