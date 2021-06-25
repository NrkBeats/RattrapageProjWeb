<?php

class Note extends AccesBDDModel {

    public function getNoteId($id_personne,$id_produit) {

        $sql = 'SELECT Score_Note FROM note WHERE ID_Client = ? AND ID_Produit = ?';
        $note = $this->executerparam($sql, array($id_personne,$id_produit));

        return $note;
    
    }


    public function getNoteprod($id_produit) {

        $sql = 'SELECT Score_Note FROM note WHERE ID_Produit = ?';
        $note = $this->executerparam($sql, array($id_produit));

        return $note;
    
    }
}

?>