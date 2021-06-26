<?php 

//vérification du rôle

    if ($_SESSION['role'] == 1) {

        $id_commentaire = $_POST["Id_commentaire_form"];
    }

    else {

        header('Location: http://rattrapagegit/?url=Dashboard');        
    }
// cherche les infos dans la BDD pour ajouter ce qu'il faut à la page de modification


    $Commentaire = new Commentaire;
    $tabcommentaire = $Commentaire->readCommID($id_commentaire)->fetchAll();

    // applique les changements envoyés par la vue
    if(isset($_POST["modifcommentaire"])){

        $id_commentaire = $_SESSION["ID_Commentaire_modif"];


        $desc_commentaire = $_POST["modifcommentaire"];


        $Commentaire = new Commentaire;
        $tabcommentaire = $Commentaire->updateCom($desc_commentaire, $id_commentaire);
    
        header('Location: http://rattrapagegit/?url=Dashboard');
    }

    //récupère les infos de ModifierCommentaireView
    elseif(isset($_POST["delete"])){

//passe l'id commmentaire en variable de session pour ne pas le perdre
        
        if(!isset($id_commentaire)){

            $id_commentaire= $_SESSION["ID_Commentaire_modif"];
        }
//supprime les likes associés au commentaire

        $objlike = new Like;
        $likedel = $objlike->deletelikecomm($id_commentaire);

//supprimes les commentaires 
        $com = new Commentaire;
        $commentaire = $com->deletecom($id_commentaire);
    
        header('Location: http://rattrapagegit/?url=Dashboard');
    }


    else {

        if ($tabcommentaire == NULL && !isset($_POST['modifier'])){

            header('Location: http://rattrapagegit/?url=Dashboard ');
            exit();
        }

        else {
    
            // récupération des variables pour les renvoyer dans la vue
            $ModifComID = $tabcommentaire[0][0];
            $ModifComsDesc = $tabcommentaire[0][1];

    
            $_SESSION['ID_Commentaire_modif'] = $id_commentaire;        
    
        }

    }



    
    



        

    
?>