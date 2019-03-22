<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot3c</title>
</head>
<body>
    <form action="ot3c.php" method="POST">
        <label for="nimi"></label>
            <p>Nimi: <input type="text" name="nimi"></p>
        <label for="viesti"></label>
            <p>Viesti: </p><textarea name="viesti" rows="5" cols="20"></textarea><br>
            <input type="submit" name="laheta" value="Lähetä">
    </form> 

<?php

if (isset($_POST['nimi']) && (isset($_POST['viesti']))) {

    $nimi = $_POST['nimi'];
    $viesti = $_POST['viesti'];

    if (strlen($nimi) > 5) {
        
    } else {
        die;
    }

    if (strlen($viesti) > 5) {
        
    } else {
        die;
    }
    
    htmlspecialchars($nimi);
    htmlspecialchars($viesti);

    $myfile = fopen("palautteet.txt", "a");
    $txt = "$nimi; $viesti\n";
    $remove_character = array("\r\n", "\r");
    $txt = str_replace($remove_character , "<br>", $txt);
    fwrite($myfile, $txt);
    fclose($myfile);
    
    $txt = wordwrap($txt,70);
    // mail("niko.immonen58@gmail.com","Xamk juttu",$txt);
}

?>
</body>
</html>