<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kirjautuminen</title>
</head>
<body>
    
<form action="" method="POST">
    <p>Kirjautuminen</p>
        <label for="tunnus"></label>
            <p>Tunnus: <input type="text" name="tunnus" id="tunnus"></p>
        <label for="salasana"></label>
            <p>Salasana: <input type="password" name="salasana" id="salasana"></p>
            <input type="submit" value="Kirjaudu" name="kirjaudu" id="kirjaudu">
</form>

<?php

include("yhteys.php");

if(isset($_REQUEST['kirjaudu'])) {

    $tunnus = $_POST['tunnus'];
    $salasana = $_POST['salasana'];

    $kysely = $yhteys->prepare("SELECT tunnus, salasana FROM tiedot WHERE tunnus= :tunnus");
    $tunnus=$_REQUEST['tunnus'];
    $kysely->bindParam(":tunnus",$tunnus);
    $kysely->execute();        

    $user = $kysely->fetchAll();
    if(count($user)){
        // Testataan onko salasana oikea
        if(crypt($_POST['salasana'], '$1$something') == $user[0]['salasana'] ) {
            $_SESSION['tunnus'] = $_REQUEST['tunnus'];
            $_SESSION['salasana'] = $_REQUEST['salasana'];
        
            header("location:demoSivu.html");
        } else {
            echo "Väärä tunnus tai salasana";
        }
    }
}

?>
</body>
</html>