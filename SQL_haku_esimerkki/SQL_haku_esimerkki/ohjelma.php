<?php
//yhteys kantaan
$dsn = "mysql:host=localhost;dbname=demokanta";
$tunnus = "root";
$salasana = "";

try {
	$yhteys = new PDO($dsn, $tunnus, $salasana);		
} catch (PDOExcetion $e) {
	die("Virhe: ".$e->getMessage());
}

$yhteys->exec("SET NAMES utf8");
//haettava tieto tulee lomakkeelta
$haettava = $_REQUEST['id'];
//sql-lause
$kysely = $yhteys->prepare("SELECT * FROM ihmiset WHERE id = :id");
$kysely->bindParam(":id",$haettava); //estää sql-injectiota osaltaan
$kysely->execute();
//tulostetaan selaimelle
header("Content-type: application/json");
print json_encode($kysely->fetchAll(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
?>




