<?php

    require_once '../models/PersonneModel.php';
    require_once '../View/InscriptionView.php';

    

    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["login"]) && isset($_POST["pass"]) ){

        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $login = $_POST["login"];
        $password = $_POST["pass"];
        $role = 0;


        $personne = new Personne;
        $loginpersonne = $personne->readPersonnebylogin($login)->fetchAll();



        print_r($loginpersonne[0][5]);
        if ($loginpersonne[0][5]==$login){

            header('Location: ../controllers/AjouterPersonneController');
        }

        else{

            $personne = new Personne;
            $tabpersonne = $personne->createPersonne($nom,$prenom,$login,$password,$role);
            header('Location: ../controllers/ConnexionController');


        }             
    }

    else{

        echo "bienvenue";
    }
?>


