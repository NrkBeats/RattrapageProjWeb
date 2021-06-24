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

        // affichage des éléments qui composent le produit
        echo "<tbody><tr>";
        echo "<td> -- ".$tabproduits[0][1]."-- </td>";
        echo "<td>--".$tabproduits[0][2]."--</td>";
        echo "<td>--".$tabproduits[0][3]."--</td>";  
        echo "<td>--".$tabproduits[0][4]."--</td>";
        echo "</tr></tbody>";

        ?>

        </table></div>


        <h2>Section Commentaires</h2>
        
        <div><table id="Commentaires" class="table table-bordered">
        <?php


    // affichage de tous les commentaires en liens avec le produit

        $i = 0;
        while ($i < count($commentaire)){

            echo "<tbody><tr>";
            echo "<td>".$commentaire[$i][1]."</td>";
            echo "</tr></tbody>";
            $i++;
        }  

        ?>

        </table></div>

    </div>
    <div>


<form id="AjoutCommentaire" name="fo" method="post" action="http://rattrapagegit/?produit=<?php echo $tabproduits[0][0]; ?>">
   <div class="form-row">


         <input type="text" class="form-control" name="com" id="com" placeholder="Ajoute ton commentaire ici" >
      </div>


   <button type="submit" class="btn btn-primary">Commenter</button>
   <p style="color : red;" id="erreur"></p>        

   </div>



</body>
</html>