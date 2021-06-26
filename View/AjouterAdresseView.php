<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>

      <h1>Adresse</h1>

      <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=AjouterAdresse">
         <div class="form-row">

               <label for="nom">Ville</label>
               <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville" >
            </div>

               <label for="prenom">Code Postal</label>
               <input type="text" class="form-control" name="CP" id="CP" placeholder="Code Postal" >
            </div>
         </div>
         <div class="form-row">

               <label for="prenom">Rue et Numéro </label>
               <input type="text" class="form-control" name="rue" id="rue" placeholder="adresse">
            </div>
         </div>
         <button type="submit" class="btn btn-primary">ajouter l'adresse</button>
         <p style="color : red;" id="erreur"></p>
      </form>
      </main>
   </body>
   </main>
</html>
