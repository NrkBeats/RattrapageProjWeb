<?php 

//vérification de l'état de connexion
if(isset($_SESSION['login'])){

    //récupération des données à l'aide des classes contenues dans les modèles

    $idproduit = $_GET['produit'];

    $produits = new Produits;
    $tabproduits= $produits->readProduitbyid($idproduit)->fetchAll();

    //récupération des commentaires 

    $commentaires = new Commentaire;
    $commentaire = $commentaires->readCommbyidproduit($idproduit)->fetchAll();

    //récupération du vote de la vue

    if(isset($_POST['contact'])){

        
    }

    //récupération de la note attribuée de l'utilisateur connecté

    $id_personne = $_SESSION['ID'];
    $notation = new Note;
    $note = $notation->getNoteId($id_personne,$idproduit)->fetchAll();

    //récupération des notes et moyenne

    $objnote = new Note;
    $notetotal = $objnote->getNoteprod($idproduit)->fetchAll();
    $i = 0;
    $somme = 0;
    $moyenne = 0;

    while ($i < count($notetotal)){
       
        $somme = $somme + $notetotal[$i][0];
        $moyenne = $somme/count($notetotal);
        $i++;
    }



    //Si le produit demandé n'existe pas on est redirigé vers une page d'erreur

    if ($tabproduits == NULL){

        header('Location: http://rattrapagegit/Erreur');        
    }

    //Si un commentaire à été ajouté sur la vue on fait le lien avec la BDD

    elseif (isset($_POST['com'])){

        $description = $_POST['com'];
        $id = $_SESSION['ID'];

        $recupcom = new Commentaire;
        $com = $recupcom->insertcom($description,$id,$idproduit);
        echo $idproduit;
        header("Location: http://rattrapagegit/?produit=".$tabproduits[0][0]."'");
    }
    

}
//si l'utiliateur est déconnecté renvoi vers connexion

else {

    header('Location: http://rattrapagegit/?url=Connexion');
}
?>