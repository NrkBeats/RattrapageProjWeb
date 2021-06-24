<?php 

    $id_personne = $_POST["Id_personne_form"];
    $personne = new Personne;
    $tabpersonneid = $personne->readPersonnebyid($id_personne)->fetchAll();

    


    if ($tabpersonneid == NULL){

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
    
    



        

    
?>