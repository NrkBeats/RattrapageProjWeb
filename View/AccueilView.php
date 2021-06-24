<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>



<?php 
    $i = 0;
    while ($i < count($tabproduits)){

        echo "<tbody><tr>";
        echo "<td>".$tabproduits[$i][0]."</td>";
        echo "<td>".$tabproduits[$i][1]."</td>";
        echo "<td>".$tabproduits[$i][2]."</td>";
        echo "<td>".$tabproduits[$i][3]."</td>";
        echo "<td>".$tabproduits[$i][4]."</td>";
        echo "</tr></tbody>";
        $i++;}

        if (isset($_SESSION['login'])){

            echo $_SESSION['login'];
        }
?>
