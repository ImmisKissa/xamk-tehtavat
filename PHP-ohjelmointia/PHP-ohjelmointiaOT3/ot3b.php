<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ot3b</title>

<style>

    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }

</style>
</head>
<body>

<?php

$luvut = array(rand(0,50), rand(0,50), rand(0,50), rand(0,50), rand(0,50));

$isoin = max($luvut);
$pienin = min($luvut);
$ka = array_sum($luvut) / count($luvut);

?>
    
<table>
    <tr>
        <td><?php echo "$luvut[0]"?></td>
        <td><?php echo "$luvut[1]"?></td>
        <td><?php echo "$luvut[2]"?></td>
        <td><?php echo "$luvut[3]"?></td>
        <td><?php echo "$luvut[4]"?></td>
    </tr>
</table>

<?php

echo "Suurin luku: $isoin";
echo "<br>";
echo "Pienin luku: $pienin";
echo "<br>";
echo "Keskiarvo: $ka";
?>

</body>
</html>