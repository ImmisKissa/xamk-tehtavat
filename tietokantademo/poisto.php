<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Tietokannasta poisto</h2>
<form method="post" action="">
Id: <input name="id">
<input type="submit" name="poistonappi" value="Hae">
</form>
<?php
//POISTO-OHJELMA
include("tietokantayhteys.php");
//Tehdään poisto, jos käyttäjä haluaa
if(isset($_REQUEST['poistonappi'])){ 
	$kysely = $yhteys->prepare("DELETE FROM ihmiset WHERE id= :id");
	$id=$_REQUEST['id'];
	$kysely->bindParam(":id",$id);
	$kysely->execute();
}

?>
</body>
</html>
