<?php 
    require_once '../models/PersonneModel.php';

    $personne = new Personne;
    $tabpersonne = $personne->readPersonneall()->fetchAll();

    require_once '../View/AdminPannelView.php';
    
?>