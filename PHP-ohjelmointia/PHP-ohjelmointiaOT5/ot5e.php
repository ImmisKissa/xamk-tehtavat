<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot5e</title>
</head>
<body>
    
<form action="" method="POST">
    <h2>Taulukon päivittäminen</h2>
        <p>Joukkue 1: <select name="joukkue1" id="joukkue1">
            <option value="hjk">HJK</option>
            <option value="kups">KuPs</option>
            <option value="ilves">Ilves</option>
            <option value="fc_lahti">FC Lahti</option>
        </select></p>

        <p>Joukkue 2: <select name="joukkue2" id="joukkue2">
            <option value="hjk">HJK</option>
            <option value="kups">KuPs</option>
            <option value="ilves">Ilves</option>
            <option value="fc_lahti">FC Lahti</option>
        </select></p>

        <p>Joukkueen 1 maalit: <input type="text" name="maalit"></p>
        <p>Joukkueen 2 maalit: <input type="text" name="maalit"></p>

        <input type="submit" value="Päivitä" name="paivita">
</form>

<?php

include("yhteys.php");



?>
</body>
</html>