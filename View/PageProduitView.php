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
        <h2>Fiche produit de : <?php echo $_SESSION['Id_Produit'] ?></h2>
            <div><table id="ProduitsList" class="table table-bordered">

        <tr>
            <th>- Nom -</th>
            <th>- Description -</th>
            <th>- stock -</th>
            <th>- Prix -</th>
            <th>- note moyenne -</th>
            <th>- nombre de notes -</th>

        </tr>

        <?php  
        

        // affichage des éléments qui composent le produit
        echo "<tbody><tr>";
        echo "<td>  ".$tabproduits[0][1]." </td>";
        echo "<td> ".$tabproduits[0][2]." </td>";
        echo "<td> ".$tabproduits[0][3]." </td>";  
        echo "<td> ".$tabproduits[0][4]." </td>";
        echo "<td> ".number_format($moyenne,2)." / 5 </td>";
        echo "<td> ".count($notetotal)."</td>";
        echo "</tr></tbody>";
        echo "</table></div>";

        if($note != NULL){
            print_r('<p>Vous avez attribué la note de '.$note[0][0].'/5</p>');
        }

        else {

            echo'

            <form id="Note" name="Note" method="post" action="http://rattrapagegit/?produit='.$tabproduits[0][0].'">
                <p>Entrez la note que vous voulez attribuer au produit (pas de retour en arrière possible)</p>
                <div>
                  <input type="radio" id="contactChoice1"
                   name="contact" value="1">
                  <label for="contactChoice1">1</label>
              
                  <input type="radio" id="contactChoice2"
                   name="contact" value="2">
                  <label for="contactChoice2">2</label>
              
                  <input type="radio" id="contactChoice3"
                   name="contact" value="3">
                  <label for="contactChoice3">3</label>
              
                  <input type="radio" id="contactChoice3"
                   name="contact" value="4">
                  <label for="contactChoice3">4</label>
              
                  <input type="radio" id="contactChoice3"
                   name="contact" value="5">
                  <label for="contactChoice3">5</label>
              
                </div>
                <div>
                  <button type="submit">noter</button>
                </div>
              </form>
';


            
        }


        ?>
    <form id="AjoutPanier" name="panierproduit"  method="post" action="http://rattrapagegit/?url=Panier">
    <div class="form-row">

    <button type="submit" name="panierproduit" value="<?php echo $tabproduits[0][0]; ?>" class="btn btn-primary">Ajouter au panier</button> 

        </div>
    </form>        


        <h2>Section Commentaires</h2>
        
        <div><table id="Commentaires" class="table table-bordered">
        <?php


    // affichage de tous les commentaires en liens avec le produit

        $i = 0;

        if (isset($listefinaledescoms)){

            while ($i < count($listefinaledescoms)){

                echo "<tbody><tr>";
                echo "<td>".$listefinaledescoms[$i][0]."</td>";
                echo "<td>----- : ".$listetri[$i][1]." |</td>";
    
                //rajoute les likes au lien
    
    
                // récupère la vérification de like, si la personne a liké alors elle ne peut
                //plus le refaire
    
                if ($listefinaledescoms[$i][1] == 0){
    
                    echo '<td><a href="http://rattrapagegit/?commentaire='.$listetri[$i][0].'">like</a></td>';
                }
    
                else {
    
                    echo '<td>vous avez liké</td>';
                }
                
                echo '</tr></tbody>';
                $i++;
            }
    


        }

        else{

            echo "pas de commentaires pour l'instant";
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

   </div>
</form>






</body>
</html>