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
                            while ($i < count($tabpersonne)){

                                echo "<tbody><tr>";
                                echo "<td>".$tabpersonne[$i][0]."</td>";
                                echo "<td>".$tabpersonne[$i][1]."</td>";
                                echo "<td>".$tabpersonne[$i][2]."</td>";
                                echo "<td>".$tabpersonne[$i][3]."</td>";
                                echo "<td>".$tabpersonne[$i][4]."</td>";
                                echo "<td>".$tabpersonne[$i][5]."</td>";
                                echo "</tr></tbody>";
                                $i++;
                            }                           
                ?>
                </table> </div>
                <div>
                <h1>Inscription</h1>
                      <div class="erreur"></div>
                           <form id="AnnonceForm" name="fo" method="post" action="../controllers/ModifierpersonneController.php">
                              <div class="form-row">
                             <div class="col-md-2 mb-3">
                              <label for="Id_personne_form">Id de la personne à modifier ou supprimer</label>
                              <input type="text" class="form-control" name="Id_personne_form" id="Id_personne_form" placeholder="ID" >
                              <button type="submit" class="btn btn-primary">modifier</button>
                                <p style="color : red;" id="erreur"></p>
            </div>
                
                
                
                </div>

                

            </div>


