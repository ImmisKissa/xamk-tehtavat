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
            <p>Tunnus: <input type="text" name="tunnus" id="tunnus"></p>
        <label for="salasana"></label>
            <p>Salasana: <input type="password" name="salasana" id="salasana"></p>
        <label for="salasana_uudelleen"></label>
            <p>Salasana uudelleen: <input type="password" name="salasana_uudelleen" id="salasana_uudelleen"></p>
            <input type="submit" value="Rekisteröidy" name="rekisteroidy" id="rekisteroidy">    
</form>

<?php

include("yhteys.php");

if(isset($_REQUEST['rekisteroidy'])) {

    $salasana = $_POST['salasana'];
    $salasana_uudelleen = $_POST['salasana_uudelleen'];

    if($salasana != $salasana_uudelleen) {
        die("Salasanat eivät täsmää!");
    } else {
        $_SESSION['tunnus'] = $_REQUEST['tunnus'];
        $_SESSION['salasana'] = $_REQUEST['salasana'];
        $_SESSION['salasana_uudelleen'] = $_REQUEST['salasana_uudelleen'];
    
        $tunnus=$_REQUEST['tunnus'];
        $salasana=$_REQUEST['salasana'];
        $salasana_uudelleen=$_REQUEST['salasana_uudelleen'];

        $salasana = crypt($_POST['salasana'], '$1$something');

        $kysely=$yhteys->prepare("INSERT INTO tiedot (tunnus,salasana) VALUES (:tunnus, :salasana)");
    
        $kysely->bindParam(":tunnus",$tunnus);
        $kysely->bindParam(":salasana",$salasana);
        $kysely->execute();
        
        header("location:kirjautuminen.php");
    }
}

?>
</body>
</html>