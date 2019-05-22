<?php

include("yhteys.php");

$kysely = $yhteys->prepare("SELECT id, joukkue, voitot, tasapelit, tappiot FROM sarjataulukko");

$kysely->execute();

header("Content-type: application/json");
print json_encode($kysely->fetchAll(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
?>