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

    public function InsertNote($id_produit,$id_personne,$valeurnote){

        $sql = "INSERT INTO `note` ( `Score_Note`, `ID_Produit`, `ID_Client`) VALUES ( ?, ?,?)";
        $note = $this->executerparam($sql, array($valeurnote, $id_produit, $id_personne));

        return $note;    
    }

    


}

?>