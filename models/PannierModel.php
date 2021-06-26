<?php 

class Panier extends AccesBDDModel {

//méthode permettant de créer un panier (utile pour les nouvelles personnes qui s'inscrivent)
    public function CreatePanier($id_personne){

        $sql = "INSERT INTO `panier` (`Etat`,`ID_Client`) VALUES (0,?)";
        $panier = $this->executerparam($sql, array($id_personne));

        return $panier;    
    }




}





?>