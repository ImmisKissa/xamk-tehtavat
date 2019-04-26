<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5d</title>
</head>
<body>
    <h2>Joukkueen poisto</h2>
        <form action="" method="POST">
            <p>Joukkue: <input type="text" name="joukkue"></p>
            <input type="submit" value="Poista" name="poistonappi">
        </form>

<?php

include("yhteys.php");

if(isset($_REQUEST['poistonappi'])){ 
	$kysely = $yhteys->prepare("DELETE FROM sarjataulukko WHERE joukkue= :joukkue");
	$joukkue=$_REQUEST['joukkue'];
	$kysely->bindParam(":joukkue",$joukkue);
	$kysely->execute();
}

?>
</body>
</html>