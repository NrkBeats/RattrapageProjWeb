<?php
//Récupération de la classe abstraite permettant la connexion

require_once 'AccesBDDModel.php';


class Personne extends AccesBDDModel {

    public function createPersonne($nom, $prenom,$login ,$password, $role) {

        $sql = 'INSERT INTO `personne` (`Mot_de_Passe`, `Role`, `Nom`, `Prenom`, `Login`) VALUES (?,?,?,?,?)';
        $personne = $this->executerparam($sql, array($password, $role ,$nom, $prenom, $login));

        return $personne;
    }

    public function readPersonneall(){

        $sql = 'SELECT * FROM `personne`';
        $personne = $this->executer($sql);

        return $personne;
    }

    public function readPersonnebyid($id_personne){

        $sql = 'SELECT * FROM `personne` WHERE ID_Client = ?';
        $personne = $this->executerparam($sql, array($id_personne));

        return $personne;
    }

    public function readPersonnebylogin($login){

        $sql = 'SELECT * FROM `personne` WHERE Login = ?';
        $personne = $this->executerparam($sql, array($login));

        return $personne;
    }

    public function adminupdatePersonne($id_personne, $mdp, $role, $nom, $prenom, $login){

        $sql = 'UPDATE personne SET Mot_de_Passe = ?, Role = ?, Nom = ?, Prenom = ?, Login = ? WHERE ID_CLient = ?';
        $personne = $this->executerparam($sql, array($mdp, $role, $nom, $prenom, $login, $id_personne));

        return $personne;      
    }

    public function DeletePersonne($id_personne){

        $sql = 'DELETE FROM `personne` WHERE ID_Client = ?';
        $personne = $this->executerparam($sql, array($id_personne));

        return $personne;     
    }


}

?>