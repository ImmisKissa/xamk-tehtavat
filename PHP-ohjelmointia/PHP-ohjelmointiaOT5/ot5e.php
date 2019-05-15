<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5e</title>
</head>
<body>
    
<form action="ot5e.php" method="POST">
    <h2>Taulukon päivittäminen</h2>
        <p>Joukkue 1: <select name="joukkue1" id="joukkue1">
            <option value="1">HJK</option>
            <option value="2">KuPs</option>
            <option value="3">Ilves</option>
            <option value="4">FC Lahti</option>
        </select></p>

        <p>Joukkue 2: <select name="joukkue2" id="joukkue2">
            <option value="1">HJK</option>
            <option value="2">KuPs</option>
            <option value="3">Ilves</option>
            <option value="4">FC Lahti</option>
        </select></p>

        <p>Joukkueen 1 maalit: <input type="text" name="maalit1"></p>
        <p>Joukkueen 2 maalit: <input type="text" name="maalit2"></p>

        <input type="submit" value="Päivitä" name="paivitysnappi">
</form>

<?php

include("yhteys.php");

if (isset($_REQUEST['paivitysnappi'])) {

    $joukkue1 = $_POST['joukkue1'];
    $joukkue2 = $_POST['joukkue2'];

    $maalit1 = $_POST['maalit1'];
    $maalit2 = $_POST['maalit2'];

    if ($maalit1 == $maalit2) {
        $kysely = $yhteys->prepare("UPDATE sarjataulukko SET tasapelit = tasapelit+1 WHERE id = :joukkue1 or id = :joukkue2");
        $kysely->bindParam(":joukkue1",$joukkue1);
        $kysely->bindParam(":joukkue2",$joukkue2);
        $kysely->execute();
    }

    if ($maalit1 > $maalit2) {
        $kysely = $yhteys->prepare("UPDATE sarjataulukko SET voitot = voitot+1 WHERE id = :joukkue1");
        $kysely->bindParam(":joukkue1",$joukkue1);
        $kysely->execute();

        $kysely = $yhteys->prepare("UPDATE sarjataulukko SET tappiot = tappiot+1 WHERE id = :joukkue2");
        $kysely->bindParam(":joukkue2",$joukkue2);
        $kysely->execute();
    } else {
        $kysely = $yhteys->prepare("UPDATE sarjataulukko SET tappiot = tappiot+1 WHERE id = :joukkue1");
        $kysely->bindParam(":joukkue1",$joukkue1);
        $kysely->execute();

        $kysely = $yhteys->prepare("UPDATE sarjataulukko SET voitot = voitot+1 WHERE id = :joukkue2");
        $kysely->bindParam(":joukkue2",$joukkue2);
        $kysely->execute();
    }
}

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