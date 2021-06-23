<?php

    require_once '../models/PersonneModel.php';
    require_once '../View/InscriptionView.php';

    if (isset($_POST["nom"])){

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $login = $_POST["login"];
        $password = $_POST["pass"];
        $role = 0;
    
        
        $personne = new Personne;
        $tabpersonne = $personne->createPersonne($nom,$prenom,$login,$password,$role);
        
    }

    else{

        echo "bienvenue";
    }
?>


