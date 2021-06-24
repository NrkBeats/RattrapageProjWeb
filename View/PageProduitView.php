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
        <h2>Fiche produit de : <?php echo $tabproduits[0][1] ?></h2>
            <div><table id="ProduitsList" class="table table-bordered">

        <tr>
            <th>- Nom -</th>
            <th>- Description -</th>
            <th>- stock -</th>
            <th>- Prix -</th>

        </tr>

        <?php       
        echo "<tbody><tr>";
        echo "<td> -- ".$tabproduits[0][1]."-- </td>";
        echo "<td>--".$tabproduits[0][2]."--</td>";
        echo "<td>--".$tabproduits[0][3]."--</td>";  
        echo "<td>--".$tabproduits[0][4]."--</td>";
        echo "</tr></tbody>";
        ?>
    
</body>
</html>