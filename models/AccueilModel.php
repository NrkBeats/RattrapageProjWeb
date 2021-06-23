<?php
//Récupération de la classe abstraite permettant la connexion

require_once 'AccesBDDModel.php';
class Produits extends AccesBDDModel {
    public function getOffres() {
        $sql = 'SELECT * FROM produit';
        $produits = $this->executer($sql);
        return $produits;
    }
}

?>