<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Tietokannan tietojen muutos</h2>
<h4>Haku</h4>
<form method="post" action="muutos.php">
Id: <input name="id">
<input type="submit" name="hakunappi" value="Hae">
</form>
<?php
/*Ohjelma on kaksivaiheinen. Vaiheessa 1 haetaan halutun henkilön puhelinnumero lomakkeelle.
Sen jälkeen käyttäjä tekee haluamansa muutoksen puhelinnumeroon ja uusi tieto tallennetaan kantaan vaiheessa 2.
hedden-kentässä kuljetetaan tieto tallennusvaiheeseen
*/
include("tietokantayhteys.php");

//Haetaan halutun henkilön puhelinnumero muuttamista varten ja näytetään se lomakkeella (Vaihe 1)
if(isset($_REQUEST['hakunappi'])){ 
	$kysely = $yhteys->prepare("SELECT * FROM Ihmiset WHERE id= :id");
	$id=$_REQUEST['id']; 
	$kysely->bindParam(":id",$id); 
	$kysely->execute();
	$rivi=$kysely->fetch();
	?>
	<hr/>
	<h4>Tallennus</h4>
	<form method="post" action="muutos.php">
	<input type="hidden" name="id" value="<?php echo $rivi['id'];?>">
	Puhelinnumero:<input name="puhelin" value="<?php echo $rivi['puhelin'];?>"><br/>
	<input name="muutosnappi" type="submit" value="Tallenna"/>
	</form>
<?php
}

//Tehdään muutos kantaan eli tallennus, jos käyttäjä haluaa (Vaihe 2)
if(isset($_REQUEST['muutosnappi'])){ 
	$kysely = $yhteys->prepare("UPDATE Ihmiset SET puhelin= :puhelin WHERE id= :id");
	$id=$_REQUEST['id'];
	$puhelin=$_REQUEST['puhelin'];
	$kysely->bindParam(":id",$id);
	$kysely->bindParam(":puhelin",$puhelin);
	$kysely->execute();
}

?>
</body>
</html>









