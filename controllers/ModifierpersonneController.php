<?php 



    if ($_SESSION['role'] == 1) {

        $id_personne = $_POST["Id_personne_form"];
    }

    else {

        $id_personne = $_SESSION['ID'];
    }

    $personne = new Personne;
    $tabpersonneid = $personne->readPersonnebyid($id_personne)->fetchAll();

    if(isset($_POST["modifnom"])){

        $id_personne = $_SESSION["ID_Utilisateur_modif"];

        $nom = $_POST["modifnom"];
        $prenom = $_POST["modifprenom"];
        $login = $_POST["modiflogin"];
        $mdp = $_POST["modifpass"];
        $role = $_POST["modifrole"];
        $personne = new Personne;
        $tabpersonne = $personne->adminupdatePersonne($id_personne,$mdp,$role,$nom,$prenom,$login);
    
        header('Location: http://rattrapagegit/?url=Dashboard');
    }

    elseif(isset($_POST["delete"])){


        //supprimes les commentaires de la personne avant de supprimer la personne

        if(!isset($id_personne)){

            $id_personne= $_SESSION["ID_Utilisateur_modif"];
        }

        //supprime les Likes Attribués avant de supprimer les commentaires de la personne et la personne
        $objnote = new Like;
        $likedel = $objnote->deletelikecli($id_personne);


        $com = new Commentaire;
        $commentaire = $com->deletecomid($id_personne);

        //supprime les notes que la personne a attribué avant de supprimer la personne

        $objnote = new Note;
        $suppnote = $objnote->deletenoteid($id_personne);

        $personne = new Personne;
        $tabpersonne = $personne->DeletePersonne($id_personne);

        

        header('Location: http://rattrapagegit/?url=Dashboard');
    }


    else {

        if ($tabpersonneid == NULL && !isset($_POST['modifier'])){

            header('Location: http://rattrapagegit/?url=Dashboard ');
            exit();
        }
    
        else {
    
            $ModifPersID = $tabpersonneid[0][0];
            $ModifPersMdp = $tabpersonneid[0][1];
            $ModifPersRole = $tabpersonneid[0][2];
            $ModifPersNom = $tabpersonneid[0][3];
            $ModifPersPrenom = $tabpersonneid[0][4];
            $ModifPersLogin = $tabpersonneid[0][5];
    
            $_SESSION['ID_Utilisateur_modif'] = $id_personne;        
    
        }

    }



    
    



        

    
?>