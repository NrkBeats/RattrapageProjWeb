<?php
//Récupération de la classe abstraite permettant la connexion

class Produits extends AccesBDDModel {
    public function getProduits() {
        $sql = 'SELECT * FROM produit';
        $produits = $this->executer($sql);
        return $produits;
    }
}

?>