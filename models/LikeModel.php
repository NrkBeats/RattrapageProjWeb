<?php

class Like extends AccesBDDModel {

    public function getLikeId($id_personne,$id_commentaire) {

        $sql = 'SELECT ID_like FROM liker WHERE ID_Client = ? AND ID_COMMENTAIRE = ?';
        $like = $this->executerparam($sql, array($id_personne,$id_commentaire));

        return $like;
    
    }

    public function getnblike($id_commentaire) {

        $sql = 'SELECT COUNT(*) FROM liker WHERE ID_COMMENTAIRE = ?';
        $nb = $this->executerparam($sql, array($id_commentaire));

        return $nb;
    
    }


    /*
    public function InsertNote($id_produit,$id_personne,$valeurnote){

        $sql = "INSERT INTO `note` ( `Score_Note`, `ID_Produit`, `ID_Client`) VALUES ( ?, ?,?)";
        $note = $this->executerparam($sql, array($valeurnote, $id_produit, $id_personne));

        return $note;    
    }

    public function deletenoteid($id_client){

        $sql = 'DELETE FROM `note` WHERE ID_Client = ?';
        $notedel = $this->executerparam($sql, array($id_client));

        return $notedel;

    }
*/

}

?>