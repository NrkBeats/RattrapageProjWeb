<?php 

//vérification de la connexion
if (!isset($_SESSION['ID'])){

    header('Location : http://rattrapagegit/?url=Connexion ');
}

//stocke le like dans la BDD
else{

    $objlike = new Like;
    $like = $objlike->InsertLike($_GET['commentaire'],$_SESSION['ID']);
    header('Location: http://rattrapagegit/?produit='.$_SESSION['Id_Produit']);

}



?>