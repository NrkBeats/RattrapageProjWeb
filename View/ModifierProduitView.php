



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Modification des stocks</h1>
      <div class="erreur"></div>
      <form id="AnnonceForm" name="fo" method="post" action="http://rattrapagegit/?url=ModifierProduit">
         <div class="form-row">

            <label for="nom">ID</label>
            <?php echo $ModifProdID ?>
            </br>
            <label for="nom">ID</label>
            <?php echo $ModifProdName ?>

         </div>
         <div class="form-row">
               <label for="prenom">stock :</label>
               <input type="input" class="form-control" name="modifstock" id="modifstock" placeholder="stock" value= "<?php echo $ModifProdStock; ?>">
            </div>

         <button type="submit" name='SubmitButton' class="btn btn-primary">Valider avec validation</button>
         </form>

</body>
</html>
