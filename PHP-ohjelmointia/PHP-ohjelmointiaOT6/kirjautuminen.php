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
    
<form>
    <p>Kirjautuminen</p>
        <label for="tunnus"></label>
            <p>Tunnus: <input type="text" name="tunnus"></p>
        <label for="salasana"></label>
            <p>Salasana: <input type="password" name="salasana"></p>
            <input type="submit" value="Kirjaudu" name="kirjaudu">
</form>

<?php

if(isset($_REQUEST['kirjaudu'])) {
    $_SESSION['tunnus'] = $_REQUEST['tunnus'];
    $_SESSION['salasana'] = $_REQUEST['salasana'];

    header("location:demoSivu.html");
}

?>
</body>
</html>