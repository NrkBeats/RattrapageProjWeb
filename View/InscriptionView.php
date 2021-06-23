<!DOCTYPE html>
<script src="./assets./vendors./jquery/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
<script src="./assets/vendors/bootstrap/js/bootstrap.bundle.js"></script>
<link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>

      <h1>Inscription</h1>
      <div class="erreur"></div>
      <form id="AnnonceForm" name="fo" method="post" action="../controllers/AjouterPersonneController.php">
         <div class="form-row">
            <div class="col-md-2 mb-3">
               <label for="nom">Nom :*</label>
               <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" >
            </div>
            <div class="col-md-2 mb-3">
               <label for="prenom">Prenom :*</label>
               <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" >
            </div>
         </div>
         <div class="form-row">
            <div class="col-md-2 mb-3">
               <label for="prenom">Login :*</label>
               <input type="text" class="form-control" name="login" id="login" placeholder="Login">
            </div>
         </div>
         <div class="form-row">
            <div class="col-md-2 mb-3">
               <label for="prenom">Mot de passe :*</label>
               <input type="password" class="form-control" name="pass" id="pass" placeholder="Mot de passe">
            </div>

         <button type="submit" class="btn btn-primary">S'inscrire</button>
         <p style="color : red;" id="erreur"></p>
      </form>
      </main>
   </body>
   </main>
</html>
