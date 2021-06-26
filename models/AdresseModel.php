<?php 

class Adresse extends AccesBDDModel {
    
    public function readadresse($id_personne){
        
        $sql = 'SELECT * FROM `adresse` WHERE ID_Client = ?';
        $adresse = $this->executerparam($sql, array($id_personne));

        return $adresse;
    }

    public function insertadresse($ville, $cp, $rue, $id_personne){

        $sql = "INSERT INTO `adresse` (`Ville`, `CP`, `Rue_et_numero`, `ID_Client`) VALUES (?,?,?,?)";
        $adresse = $this->executerparam($sql, array($ville, $cp, $rue, $id_personne));

        return $adresse;
    }

    public function deleteadresse($id_client){

        $sql = 'DELETE FROM `adresse` WHERE ID_Client = ?';
        $adresse = $this->executerparam($sql, array($id_client));

        return $adresse;

    }

    

}


?>