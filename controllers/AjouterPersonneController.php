<?php

echo "test";

    if(isset($_SESSION['login']) && $_SESSION['role'] == 0){

        header('Location: http://rattrapagegit/?url=accueil');
    }
    
    else {

        echo 'wouhou';
    }


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

            header('Location: http://rattrapagegit/?url=Inscription');
        }

        else{

            $personne = new Personne;
            $tabpersonne = $personne->createPersonne($nom,$prenom,$login,$password,$role);
            header('Location: http://rattrapagegit/?url=Connexion');


        }             
    }

?>


