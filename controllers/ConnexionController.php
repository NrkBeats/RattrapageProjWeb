<?php
    require_once '../View/ConexionView.php';
    require_once '../models/PersonneModel.php';

    if (isset($_POST['username'])){

        $login = $_POST['username'];
        $password = $_POST['password'];

        $personne = new Personne;
        $loginpersonne = $personne->readPersonnebylogin($login)->fetchAll();

        if ($loginpersonne!= NULL){

            print_r("premier if reussi");

            if ($password == $loginpersonne[0][1]){
                
                print_r("deuxième if reussi");
            }


        }




    }





?>