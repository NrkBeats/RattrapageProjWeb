<?php

    session_start();
    require_once '../models/PersonneModel.php';

    $id_personne = $_SESSION["ID_Utilisateur_modif"];

    if(isset($_POST["modifnom"])){

        $nom = $_POST["modifnom"];
        $prenom = $_POST["modifprenom"];
        $login = $_POST["modiflogin"];
        $mdp = $_POST["modifpass"];
        $role = 0;
        $personne = new Personne;
        $tabpersonne = $personne->adminupdatePersonne($id_personne,$mdp,$role,$nom,$prenom,$login);
    
        header('Location: ../controllers/AdmindashboardController');

    }

    elseif(isset($_POST["delete"])){

        $personne = new Personne;
        $tabpersonne = $personne->DeletePersonne($id_personne);
    }




?>