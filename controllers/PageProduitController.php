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

    //Si le produit demandé n'existe pas on est redirigé vers une page d'erreur

    if ($tabproduits == NULL){

        header('Location: http://rattrapagegit/Erreur');        
    }


}
//si l'utiliateur est déconnecté renvoi vers connexion

else {

    header('Location: http://rattrapagegit/?url=Connexion');
}
?>