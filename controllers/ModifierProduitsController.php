<?php 

//vérification du rôle

if (isset($_SESSION['login']) && $_SESSION['role'] == 1) {

    $id_produit = $_POST["Id_personne_form"];
    echo $id_produit;

}

else {

    header('Location: http://rattrapagegit/?url=accueil');
}



?>