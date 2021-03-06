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
                <?php if ($_SESSION['role'] == 1){
                    echo '<h2>Liste des Utilisateurs:</h2>';
                } ?>
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

                    //affiche la liste des utilisateurs ou les données de l'utilisateur selon les droits
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
                <h2>modifier le compte</h2>
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
// affiche les différents produits poir les administrateurs
                            echo "<tbody><tr>";
                            echo "<td>--".$tabproduits[$i][0]."--</td>";
                            echo "<td>--".$tabproduits[$i][1]."--</td>";
                            echo "<td>--".$tabproduits[$i][3]."--</td>";

                            echo "</tr></tbody>";
                            $i++;
                        }                           
            
            echo '</table> </div>
            <div>
            <h2>modifier le stock</h2>
                  <div class="erreur"></div>
                       <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=ModifierProduit">
                          <div class="form-row">
                         <div class="col-md-2 mb-3">
                             
                         <label for="Id_personne_form">Id du produit où le stock doit être modifié</label>
                         
                        <input type="text" class="form-control" name="Id_produit_form" id="Id_produit_form" placeholder="ID" >
                        
                       
                            
                  
        <button type="submit" name="modifier" class="btn btn-primary">modifier</button>
            </div>
                </form>
           </div>
        </div>
        </section>';



        echo'<section id = produits>
        <div id="Users" class="col-md-6 well">
            <h2>Liste des Commentaires:</h2>
            <div><table id="UserList" class="table table-bordered">
                <thead class="alert-info">
                    <tr>
                        <th>- ID Commentaire -</th>
                        <th>- Description -</th>
                        <th>- Id utilisateur -</th>
                        <th>- Id produit -</th>
                    </tr>
                </thead>
    ';
                    $i = 0;
                        while ($i < count($tabcommentaire)){
// affiche les commentaires si la personne est administrateur
                            echo "<tbody><tr>";
                            echo "<td>".$tabcommentaire[$i][0]."</td>";
                            echo "<td>".$tabcommentaire[$i][1]."</td>";
                            echo "<td>".$tabcommentaire[$i][2]."</td>";
                            echo "<td>".$tabcommentaire[$i][3]."</td>";

                            echo "</tr></tbody>";
                            $i++;
                        }                           
            
            echo '</table> </div>
            <div>
            <h1>modifier le commentaire</h1>
                  <div class="erreur"></div>
                       <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=ModifierCommentaires">
                          <div class="form-row">
                         <div class="col-md-2 mb-3">
                             
                            <label for="Id_personne_form">Id du commentaire à supprimer ou modifier</label>
                         
                            <input type="text" class="form-control" name="Id_commentaire_form" id="Id_commentaire_form" placeholder="ID" > 
                            
                  
        <button type="submit" name="modifier" class="btn btn-primary">modifier</button>
            </div>
                </form>
           </div>
        </div>

        </section>';
    }
    ?>
    <section id="Profile">

        <h1>Mes adresses :</h1>
        <div class="grid-container">


            <div id="Users" class="col-md-6 well">  
                <div><table id="UserList" class="table table-bordered"> 
                    <thead class="alert-info">
                        <tr>
                            <th>- Ville -</th>
                            <th>- Code Postal -</th>
                            <th>- Rue et numéro -</th>

                        </tr>
                    </thead>
                    <?php

                    //affiche la liste des adresses
                        $i = 0;
                            while ($i < count($tabadresse)){

                                echo "<tbody><tr>";
                                echo "<td>".$tabadresse[$i][1]."</td>";
                                echo "<td>".$tabadresse[$i][2]."</td>";
                                echo "<td>".$tabadresse[$i][3]."</td>";


                                echo "</tr></tbody>";
                                $i++;
                            }                           
                ?>
                </table> </div>
                <div>
                      <div class="erreur"></div>
                           <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=AjouterAdresse">      
                              <button type="submit" name="ajouter" class="btn btn-primary">ajouter une adresse</button>
                </div>
                </div>
                    </form>
               </div>
            </div>
            </div>
    </section>



</main>
            


