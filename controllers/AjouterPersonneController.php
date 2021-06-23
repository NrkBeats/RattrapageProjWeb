<?php

    require_once '../models/PersonneModel.php';

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $login = $_POST["login"];
    $password = $_POST["pass"];
    $role = 0;

    
    $personne = new Personne;
    $tabpersonne = $personne->createPersonne($nom,$prenom,$login,$password,$role);

?>


