<?php 

//vérification du rôle

if (isset($_SESSION['login']) && $_SESSION['role'] == 1) {

    $id_produit = $_POST["Id_produit_form"];
    $produit = new Produits;
    $tabproduits = $produit->readProduitbyid($id_produit)->fetchAll();
    
    //va chercher les infos correspondant à l'ID demandé pour les produits


    if(isset($_POST["modifstock"])){

        $prod = new Produits;
        $stock = $_POST['modifstock'];
        $idproduit = $_SESSION['id_produit'];   
        $tabproduits = $prod->UpdateStock($stock,$idproduit);
        header('Location: http://rattrapagegit/?url=Dashboard ');  
             
    }
        
        



    elseif ($tabproduits == NULL || !isset($_POST['modifier'])){

        // si le produit n'existe pas le retour est null, alors il faut retourner à l'accueil

        header('Location: http://rattrapagegit/?url=Dashboard ');
        exit();
    }

    else {

        $ModifProdID = $tabproduits[0][0];
        $ModifProdName = $tabproduits[0][1];
        $ModifProdStock = $tabproduits[0][3];

        $_SESSION['id_produit'] = $tabproduits[0][0];



    }

}

else {

    header('Location: http://rattrapagegit/?url=accueil');
}



?>