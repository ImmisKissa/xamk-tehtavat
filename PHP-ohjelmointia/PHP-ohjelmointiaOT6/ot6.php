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

<form>
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

if(isset($_REQUEST['rekisteroidy'])) {
    $_SESSION['tunnus'] = $_REQUEST['tunnus'];
    $_SESSION['salasana'] = $_REQUEST['salasana_uudelleen'];
    $_SESSION['salasana_uudelleen'] = $_REQUEST['salasana'];

    header("location:kirjautuminen.php");
}

?>
</body>
</html>