<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>

      <h1>Inscription</h1>

      <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=Inscription">
         <div class="form-row">

               <label for="nom">Nom :*</label>
               <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" >
            </div>

               <label for="prenom">Prenom :*</label>
               <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" >
            </div>
         </div>
         <div class="form-row">

               <label for="prenom">Login :*</label>
               <input type="text" class="form-control" name="login" id="login" placeholder="Login">
            </div>
         </div>
         <div class="form-row">

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
