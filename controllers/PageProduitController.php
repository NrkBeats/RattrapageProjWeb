<?php 

//vérification de l'état de connexion
if(isset($_SESSION['login'])){

    //récupération des données à l'aide des classes contenues dans les modèles

    if(isset($_GET['produit'])){

        $_SESSION['Id_Produit'] = $_GET['produit'];
    }
    

    $produits = new Produits;
    $tabproduits= $produits->readProduitbyid($_SESSION['Id_Produit'])->fetchAll();

    //récupération des commentaires 

    $commentaires = new Commentaire;
    $commentaire = $commentaires->readCommbyidproduit($_SESSION['Id_Produit'])->fetchAll();




    //récupération des commentaires et leur nombre de likes pour créer une liscte associatn les deux mêmes si les likes n'existentpas


    $i = 0;
    $listetri = array();
    while ($i < count($commentaire)){

        $commentaire[$i][0];
        $objlike = New Like;
        $nb = $objlike->getnblike($commentaire[$i][0])->fetchAll();

        $listetri[$i] = [$commentaire[$i][0],$nb[0][0]];
        $i++;

    }




    $i = 0;
    $listetrifini = array();

    //tri du nouveau tableau créé contenant l'ID du commentaire avec son nobre de like
    $columns = array_column($listetri, 1);
    array_multisort($columns, SORT_DESC, $listetri);

    while ($i< count($listetri)){

        $objcommentaire = new Commentaire;
        $comm = $objcommentaire->readCommID($listetri[$i][0])->fetchAll();

        $listefinaledescoms[$i] = $comm[0][1];

        $i++;
        
    }
    


    //récupération de la note attribuée de l'utilisateur connecté

    $id_personne = $_SESSION['ID'];
    $notation = new Note;
    $note = $notation->getNoteId($id_personne,$_SESSION['Id_Produit'])->fetchAll();


    //récupération du vote de la vue pour mettre dans la BDD

    if(isset($_POST['contact'])){


        $objaddnote = new Note;
        $addnote = $objaddnote->InsertNote($_SESSION['Id_Produit'],$id_personne,$_POST['contact']);
        header("Location: http://rattrapagegit/?produit=".$tabproduits[0][0]);        
    }

    //récupération des notes et moyenne

    $objnote = new Note;
    $notetotal = $objnote->getNoteprod($_SESSION['Id_Produit'])->fetchAll();
    $i = 0;
    $somme = 0;
    $moyenne = 0;

    while ($i < count($notetotal)){
       
        $somme = $somme + $notetotal[$i][0];
        $moyenne = $somme/count($notetotal);
        $i++;
    }



    //Si le produit demandé n'existe pas on est redirigé vers une page d'erreur

    if ($tabproduits == NULL && !isset($_POST['contact'])){

        header('Location: http://rattrapagegit/Erreur');        
    }

    //Si un commentaire à été ajouté sur la vue on fait le lien avec la BDD

    elseif (isset($_POST['com'])){

        $description = $_POST['com'];
        $id = $_SESSION['ID'];

        $recupcom = new Commentaire;
        $com = $recupcom->insertcom($description,$id,$_SESSION['Id_Produit']);
        header("Location: http://rattrapagegit/?produit=".$tabproduits[0][0]."'");
    }
    

}
//si l'utiliateur est déconnecté renvoi vers connexion

else {

    header('Location: http://rattrapagegit/?url=Connexion');
}
?>