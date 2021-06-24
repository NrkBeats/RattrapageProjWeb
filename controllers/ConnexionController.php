<?php
    if (isset($_POST['username'])){

        $login = $_POST['username'];
        $password = $_POST['password'];

        $personne = new Personne;
        $loginpersonne = $personne->readPersonnebylogin($login)->fetchAll();

        if ($loginpersonne!= NULL){
            if ($password == $loginpersonne[0][1]){
                
                print_r("deuxième if reussi");
                $_SESSION['login'] = $login;
                $_SESSION['role'] = $loginpersonne[0][2];

                header('Location: http://rattrapagegit/?url=accueil');

            }
        }




    }





?>