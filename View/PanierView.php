<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>
<body>

<div id="Produits" class="col-md-6 well">
        <h2>Liste des Vélos:</h2>
        <div><table id="ProduitsList" class="table table-bordered">

    <tr>
            <th>- Nom article -</th>
            <th>- Prix article -</th>
            <th>- Quantité -</th>

    </tr>

<?php 
    $i = 0;
    while ($i < count($articlepanier)){

        //affichage des articles et du bouton modifier pour changer la quantité dans le panier

        echo "<tbody><tr>";
        echo "<td>".$articlepanier[$i][4]."</td>";
        echo "<td>".$articlepanier[$i][7]."</td>";

                    ?>

        <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=Panier">
        <td><input type="input" class="form-control" name="modifqte" id="modifqte" placeholder="quantité" value= "<?php echo $articlepanier[$i][2]; ?>"></td>       
        <td> <button type="submit" name="produit" value="<?php echo $articlepanier[$i][1] ?>" class="btn btn-primary">modifier</button></form></td>
        </tr></tbody>

        <?php //les lignes au dessus permettent d'ajouter un bouton pour modifier les quantitées en affichant celle déja choisie
        // on transmet aussi par le bouton l'id du produit choisi pour la modif
        $i++;}

?>
</div>



        
</body>
</html>