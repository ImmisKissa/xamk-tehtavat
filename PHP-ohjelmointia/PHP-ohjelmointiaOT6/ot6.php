<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot6</title>
</head>
<body>

<form action="ot6.php" method="POST">
    <p>Rekisteröidy luomalla verkkotunnukset</p>
        <label for="tunnus"></label>
            <p>Tunnus: <input type="text" name="tunnus"></p>
        <label for="salasana"></label>
            <p>Salasana: <input type="password" name="salasana"></p>
        <label for="salasana_uudelleen"></label>
            <p>Salasana uudelleen: <input type="password" name="salasana_uudelleen"></p>
            <input type="submit" value="Rekisteröidy" name="rekisteroidy">    
</form>

<?php

include("yhteys.php");

if(isset($_REQUEST['rekisteroidy'])) {

    $_SESSION['tunnus'] = $_REQUEST['tunnus'];
    $_SESSION['salasana'] = $_REQUEST['salasana'];
    $_SESSION['salasana_uudelleen'] = $_REQUEST['salasana_uudelleen'];

    $tunnus=$_REQUEST['tunnus'];
    $salasana=$_REQUEST['salasana'];
    $salasana_uudelleen=$_REQUEST['salasana_uudelleen'];

    $kysely=$yhteys->prepare("INSERT INTO tiedot (tunnus,salasana,salasana_uudelleen) VALUES (:tunnus, :salasana, :salasana_uudelleen)");

    $kysely->bindParam(":tunnus",$tunnus);
    $kysely->bindParam(":salasana",$salasana);
    $kysely->bindParam(":salasana_uudelleen",$salasana_uudelleen);
	$kysely->execute();

    // header("location:kirjautuminen.php");
}

?>
</body>
</html>