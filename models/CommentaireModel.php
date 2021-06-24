<?php
//Récupération de la classe pour se connecter à la BDD

class Commentaire extends AccesBDDModel {


    public function readCommbyidproduit($id_produit){

        $sql = 'SELECT * FROM `commentaire` WHERE ID_Produit = ?';
        $commentaire = $this->executerparam($sql, array($id_produit));

        return $commentaire;
    }
}

?>