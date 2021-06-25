<?php 

    if (!isset($_SESSION['login'])){

        header('Location: http://rattrapagegit/?url=Connexion');
    }

    if($_SESSION['role'] == 1){

        $personne = new Personne;
        $tabpersonneid = $personne->readPersonneall()->fetchAll();

        $produits = new Produits;
        $tabproduits= $produits->getProduits()->fetchAll();

    }
    
    elseif($_SESSION['role'] == 0){

        $personne = new Personne;
        $tabpersonneid = $personne->readPersonnebyid($_SESSION['ID'])->fetchAll();

    }  

    echo $_SESSION['role'];
    
?>