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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="Produits" class="col-md-6 well">
        <h2>Liste des Vélos:</h2>
        <div><table id="ProduitsList" class="table table-bordered">

    <tr>
            <th>- Nom -</th>
            <th>- Description -</th>
            <th>- stock -</th>
            <th>- Prix -</th>

    </tr>

<?php 
    $i = 0;
    while ($i < count($tabproduits)){

        
        echo "<tbody><tr>";
        echo "<td>".$tabproduits[$i][1]."</td>";
        echo "<td>".$tabproduits[$i][2]."</td>";
        echo "<td>".$tabproduits[$i][3]."</td>";  
        echo "<td>".$tabproduits[$i][4]."</td>";?>

        <form id="AnnonceForm" name="fo" method="get" action="http://rattrapagegit/?url=produit">
                              <div class="form-row">
                              </div>
        <?php

        echo '<td> <button type="submit" name="produit" value="'.$tabproduits[$i][0].'" class="btn btn-primary">fiche produit</button></form>';
        echo "</tr></tbody>";
        $i++;}

?>
</div>


</body>
</html>


