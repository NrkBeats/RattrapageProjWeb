<?php
//si le formulaire a été rempli, alors on transmet les infos d'adresse à la BDD
    if(isset($_POST['ville'])){

        $objadresse = new Adresse;
        $adresse = $objadresse->insertadresse($_POST['ville'],$_POST['CP'],$_POST['rue'],$_SESSION['ID']);
        header('Location: http://rattrapagegit/?url=Dashboard');

    }

//sinon on teste si la personne est connecté, si elle ne l'est pas on la renvoie à la page de connexion
    elseif(!isset($_SESSION['ID'])){

        header('Location: http://rattrapagegit/?url=Connexion');

    }


?>