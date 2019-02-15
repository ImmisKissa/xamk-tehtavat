<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ot1b</title>
</head>
<body>
    <form action="ot1b.php" method="POST">
        <p>Kirjoita nimesi:</p>
        <label for="nimi"></label>
        <input type="text" name="nimi">
        <input type="submit" value="Paina"><br>
    </form>

<?php

if (isset($_POST['nimi'])) {
    $nimi = $_POST['nimi'];
    echo "<h3>Tervetuloa $nimi</h3>";
} else {
    echo "<p>Kirjoita nimesi!</p>";
}

?>



</body>
</html>