<?php 

//vérification de l'état de connexion
if(isset($_SESSION['login'])){

    //récupération des données à l'aide des classes contenues dans les modèles

    $idproduit = $_GET['produit'];

    $produits = new Produits;
    $tabproduits= $produits->readProduitbyid($idproduit)->fetchAll();


}
//si l'utiliateur est déconnecté renvoi vers connexion

else {

    header('Location: http://rattrapagegit/?url=Connexion');
}
?>