<?php 

class Adresse extends AccesBDDModel {
    
    public function readadresse($id_personne){
        
        $sql = 'SELECT * FROM `adresse` WHERE ID_Client = ?';
        $adresse = $this->executerparam($sql, array($id_personne));

        return $adresse;
    }

    

}


?>