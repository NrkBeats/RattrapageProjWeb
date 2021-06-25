



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Modification du commentaire</h1>
      <div class="erreur"></div>
      <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=ModifierCommentaires">
         <div class="form-row">

            <label for="nom">ID commentaire</label>
            <?php echo $ModifComID ?>
            </br>


         </div>
         <div class="form-row">
               <label for="commentaire">commentaire :</label>
               <input type="input" class="form-control" name="modifcommentaire" id="modifcommentaire" placeholder="commentaire" value= "<?php echo $ModifComsDesc; ?>">
            </div>

         <button type="submit" name='SubmitButton' class="btn btn-primary">Valider avec validation</button>
         </form>

         <form method="post" action="http://rattrapagegit/?url=ModifierCommentaires">
        <span id="delete"><button type="submit" name="delete" value="delete" id="delete" class="btn btn-danger">Suprimer</button></span>

</form>

</body>
</html>
