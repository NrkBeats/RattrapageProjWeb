<?php 

    if (isset($_POST["Id_personne_form"])) {

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

        $personne = new Personne;
        $tabpersonne = $personne->DeletePersonne($id_personne);
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