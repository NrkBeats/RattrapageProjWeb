<?php

echo "test";

    if(isset($_SESSION['login']) && $_SESSION['role'] == 0){

        header('Location: http://rattrapagegit/?url=accueil');
    }
    
    else {

        echo 'wouhou';
    }

//si toutes les informations ont été envoyées par la méthode post 
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["login"]) && isset($_POST["pass"]) ){

//on vérifie que le login (censé être une clef primaire) n'est pas déjà pris en cherchant sa valeur dans la bdd
        $personne = new Personne;
        $loginpersonne = $personne->readPersonnebylogin($_POST["login"])->fetchAll();


//on compare, si c'est le cas on est ramené à la page d'inscription
        if ($loginpersonne[0][5]==$_POST["login"]){

            header('Location: http://rattrapagegit/?url=Inscription');
        }
//si tout est bon, la personne est créée et on instancie la classe panier pour lui créer aussi un panier vide
        else{

            $objpersonne = new Personne;
            $tabpersonne = $objpersonne->createPersonne($_POST["nom"],$_POST["prenom"],$_POST["login"],$_POST["pass"],0);
            $tabpersonne = $objpersonne->readPersonnebylogin($_POST["login"])->fetchAll();
            

            $objpanier = new Panier;
            $panier = $objpanier->CreatePanier($tabpersonne[0][0]);

            header('Location: http://rattrapagegit/?url=Connexion');


        }             
    }

?>


