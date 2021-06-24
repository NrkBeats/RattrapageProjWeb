<?php
//Récupération de la classe abstraite permettant la connexion

class Produits extends AccesBDDModel {
    public function getOffres() {
        $sql = 'SELECT * FROM produit';
        $produits = $this->executer($sql);
        return $produits;
    }
}

?>