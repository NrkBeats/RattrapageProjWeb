<?php 

    if (!isset($_SESSION['login'])){

        header('Location: http://rattrapagegit/?url=Connexion');
    }

    if($_SESSION['role'] == 1){

        $personne = new Personne;
        $tabpersonneid = $personne->readPersonneall()->fetchAll();

        $produits = new Produits;
        $tabproduits= $produits->getProduits()->fetchAll();

        $commentaire = new Commentaire;
        $tabcommentaire= $commentaire->readComm()->fetchAll();

    }
    
    elseif($_SESSION['role'] == 0){

        $personne = new Personne;
        $tabpersonneid = $personne->readPersonnebyid($_SESSION['ID'])->fetchAll();


    }  

    $objadresse = new Adresse;
    $tabadresse = $objadresse->readadresse($_SESSION['ID'])->fetchAll();


    echo $_SESSION['role'];
    
?>