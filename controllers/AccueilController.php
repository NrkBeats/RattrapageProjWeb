<?php 

    require_once '../models/AccueilModel.php';


    $produits = new Produits;
    $tabproduits= $produits->getOffres()->fetchAll();

    require_once '../View/AccueilView.php'

?>
