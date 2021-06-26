<?php

class Like extends AccesBDDModel {

    public function getLikeId($id_personne,$id_commentaire) {

        $sql = 'SELECT ID_like FROM liker WHERE ID_Client = ? AND ID_COMMENTAIRE = ?';
        $veriflike = $this->executerparam($sql, array($id_personne,$id_commentaire));

        return $veriflike;
    
    }

    public function getnblike($id_commentaire) {

        $sql = 'SELECT COUNT(*) FROM liker WHERE ID_COMMENTAIRE = ?';
        $nb = $this->executerparam($sql, array($id_commentaire));

        return $nb;
    
    }
    
    public function InsertLike($id_commentaire,$id_personne){

        $sql = "INSERT INTO `liker` (`ID_COMMENTAIRE`, `ID_Client`) VALUES (?,?);";
        $like = $this->executerparam($sql, array($id_commentaire, $id_personne));

        return $like;    
    }

    public function deletelikecli($id_client){

        $sql = 'DELETE FROM `liker` WHERE ID_Client = ?';
        $likedel = $this->executerparam($sql, array($id_client));

        return $likedel;

    }
    public function deletelikecomm($id_commentaire){

        $sql = 'DELETE FROM `liker` WHERE ID_COMMENTAIRE = ?';
        $likedel = $this->executerparam($sql, array($id_commentaire));

        return $likedel;

    }

}

?>