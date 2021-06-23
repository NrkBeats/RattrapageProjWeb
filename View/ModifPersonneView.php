



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Modification de compte</h1>
      <div class="erreur"></div>
      <form id="AnnonceForm" name="fo" method="post" action="../controllers/Modifierpersonne2Controller.php">
         <div class="form-row">
            <div class="col-md-2 mb-3">

            <label for="nom">ID</label>
            <?php echo $ModifPersID ?>

               <label for="nom">Nom :*</label>
               <input type="text" class="form-control" name="modifnom" id="modifnom" placeholder="Nom" value= "<?php echo $ModifPersNom; ?>" >
            </div>
            <div class="col-md-2 mb-3">
               <label for="prenom">Prenom :*</label>
               <input type="text" class="form-control" name="modifprenom" id="modifprenom" placeholder="Prénom" value= "<?php echo $ModifPersPrenom; ?>" >
            </div>
         </div>
         <div class="form-row">
            <div class="col-md-2 mb-3">
               <label for="prenom">Login :*</label>
               <input type="text" class="form-control" name="modiflogin" id="modiflogin" placeholder="Login" value= "<?php echo $ModifPersLogin; ?>" >
            </div>
         </div>
         <div class="form-row">
            <div class="col-md-2 mb-3">
               <label for="prenom">Mot de passe :*</label>
               <input type="password" class="form-control" name="modifpass" id="modifpass" placeholder="Mot de passe" value= "<?php echo $ModifPersMdp; ?>">
            </div>
         <button type="submit" name='SubmitButton' class="btn btn-primary">Valider avec validation</button>
         </form>
         <form method="post" action="Modifierpersonne2Controller.php">
 
        <span id="Suprimer"><button type="submit" name="delete" value="delete" id="delete" class="btn btn-danger">Suprimer</button></span>

</form>

</body>
</html>
