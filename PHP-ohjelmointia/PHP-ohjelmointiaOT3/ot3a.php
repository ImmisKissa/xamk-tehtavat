<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot3a</title>
</head>
<body>
    <form action="ot3a.php" method="post">
        <label for="sana"></label>
        <p>Kirjoita jotain: <input type="text" name="sana"></p>
        <input type="submit" value="Tulosta">
    </form>

<?php

if (isset($_POST['sana'])) {
    $sana = $_POST['sana'];
}

    function ywt_get_first_char($str) {
        if($str)
            return strtolower(substr($str, 0, 1));
    
        return false;
    }

    function ywt_get_last_char($str) {
        if($str)
            return strtolower(substr($str, -1));
    
        return false;
    }

    echo ywt_get_first_char($sana);
    echo ywt_get_last_char($sana);

?>
</body>
</html>