<?php
//Récupération de la classe pour se connecter à la BDD

class Commentaire extends AccesBDDModel {


    public function readCommbyidproduit($id_produit){

        $sql = 'SELECT * FROM `commentaire` WHERE ID_Produit = ?';
        $commentaire = $this->executerparam($sql, array($id_produit));

        return $commentaire;
    }

    public function readComm(){

        $sql = 'SELECT * FROM `commentaire`';
        $commentaire = $this->executer($sql);

        return $commentaire;
    }

    public function readCommID($id_commentaire){

        $sql = 'SELECT * FROM `commentaire` where ID_COMMENTAIRE =?';
        $commentaire = $this->executerparam($sql, array($id_commentaire));

        return $commentaire;
    }

    public function insertcom($description, $id_client, $id_produit){

        $sql = 'INSERT INTO `commentaire` (`Description_commentaire`, `ID_Client`, `ID_Produit`) VALUES (?,?,?)';
        $produits = $this->executerparam($sql, array($description, $id_client, $id_produit));

        return $produits;
    }

    public function deletecomid($id_client){

        $sql = 'DELETE FROM `commentaire` WHERE ID_Client = ?';
        $commentaire = $this->executerparam($sql, array($id_client));

        return $commentaire;

    }

    public function deletecom($id_commentaire){

        $sql = 'DELETE FROM `commentaire` WHERE ID_COMMENTAIRE = ?';
        $commentaire = $this->executerparam($sql, array($id_commentaire));

        return $commentaire;

    }

    public function updateCom($desc_commentaire, $id_commentaire){

        $sql = 'UPDATE commentaire SET Description_commentaire = ? WHERE ID_COMMENTAIRE = ?';
        $commentaire = $this->executerparam($sql, array($desc_commentaire, $id_commentaire));

        return $commentaire;      
    }

}

?>