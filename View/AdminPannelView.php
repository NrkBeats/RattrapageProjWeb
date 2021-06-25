<!DOCTYPE html>
<html>
<head>
    <title>Pannel admin</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <meta charset="utf-8">
</head>
<body>
<header>
</header>

<main>
    <section id="Profile">
        <h1>Mon compte :</h1>
        <div class="grid-container">


            <div id="Users" class="col-md-6 well">
                <h2>Liste des Utilisateurs:</h2>
                <div><table id="UserList" class="table table-bordered">
                    <thead class="alert-info">
                        <tr>
                            <th>- ID -</th>
                            <th>- mot de passe -</th>
                            <th>- rôle -</th>
                            <th>- Nom -</th>
                            <th>- Prénom -</th>
                            <th>- Login -</th>
                        </tr>
                    </thead>
                    <?php
                        $i = 0;
                            while ($i < count($tabpersonneid)){

                                echo "<tbody><tr>";
                                echo "<td>".$tabpersonneid[$i][0]."</td>";
                                echo "<td>".$tabpersonneid[$i][1]."</td>";
                                echo "<td>".$tabpersonneid[$i][2]."</td>";
                                echo "<td>".$tabpersonneid[$i][3]."</td>";
                                echo "<td>".$tabpersonneid[$i][4]."</td>";
                                echo "<td>".$tabpersonneid[$i][5]."</td>";
                                echo "</tr></tbody>";
                                $i++;
                            }                           
                ?>
                </table> </div>
                <div>
                <h1>modifier le compte</h1>
                      <div class="erreur"></div>
                           <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=ModifierProfil">
                              <div class="form-row">
                             <div class="col-md-2 mb-3">
                             <?php if($_SESSION['role']==1){print_r('<label for="Id_personne_form">Id de la personne à modifier ou supprimer</label>'); 
                                print_r('<input type="text" class="form-control" name="Id_personne_form" id="Id_personne_form" placeholder="ID" >'); } ?>
                              
                              
                              <button type="submit" name="modifier" class="btn btn-primary">modifier</button>
                </div>
                </div>
                    </form>
               </div>
            </div>
            </div>
    </section>

    <?php

    if ($_SESSION['role']==1){

        echo'<section id = produits>
        <div id="Users" class="col-md-6 well">
            <h2>Liste des Produits:</h2>
            <div><table id="UserList" class="table table-bordered">
                <thead class="alert-info">
                    <tr>
                        <th>- ID -</th>
                        <th>- Nom -</th>
                        <th>- stock -</th>
                    </tr>
                </thead>
    ';
                    $i = 0;
                        while ($i < count($tabproduits)){

                            echo "<tbody><tr>";
                            echo "<td>--".$tabproduits[$i][0]."--</td>";
                            echo "<td>--".$tabproduits[$i][1]."--</td>";
                            echo "<td>--".$tabproduits[$i][3]."--</td>";

                            echo "</tr></tbody>";
                            $i++;
                        }                           
            
            echo '</table> </div>
            <div>
            <h1>modifier le stock</h1>
                  <div class="erreur"></div>
                       <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=ModifierProduit">
                          <div class="form-row">
                         <div class="col-md-2 mb-3">';

                         if($_SESSION['role']==1){
                             
                            print_r('<label for="Id_personne_form">Id du produit où le stock doit être modifié</label>');
                         
                            print_r('<input type="text" class="form-control" name="Id_produit_form" id="Id_produit_form" placeholder="ID" >'); 
                        
                        }
                            
                  
echo '<button type="submit" name="modifier" class="btn btn-primary">modifier</button>
            </div>
                </form>
           </div>
        </div>

    



</section>';


    }
    

    ?>




</main>
            


