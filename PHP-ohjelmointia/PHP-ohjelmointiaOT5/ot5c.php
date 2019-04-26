<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5c</title>
</head>
<body>
    <h2>Joukkueen lisäys</h2>

<?php

include("yhteys.php");
if(isset($_REQUEST['lisaysnappi']))
{

    $joukkue=$_REQUEST['joukkue'];
    $voitot=$_REQUEST['voitot'];
    $tasapelit=$_REQUEST['tasapelit'];
    $tappiot=$_REQUEST['tappiot'];

    $kysely=$yhteys->prepare("INSERT INTO sarjataulukko (joukkue,voitot,tasapelit,tappiot) VALUES (:joukkue, :voitot, :tasapelit, :tappiot)");

    $kysely->bindParam(":joukkue",$joukkue);
	$kysely->bindParam(":voitot",$voitot);
	$kysely->bindParam(":tasapelit",$tasapelit);
	$kysely->bindParam(":tappiot",$tappiot);
	$kysely->execute();

}

?>

<form action="" method="POST">
    <p>Joukkue: <input type="text" name="joukkue"></p><br>
    <p>Voitot: <input type="text" name="voitot"></p><br>
    <p>Tasapelit: <input type="text" name="tasapelit"></p><br>
    <p>Tappiot: <input type="text" name="tappiot"></p><br>
    <input type="submit" value="Lisää" name="lisaysnappi">
</form>
</body>
</html>