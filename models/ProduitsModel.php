<?php
//Récupération de la classe abstraite permettant la connexion

class Produits extends AccesBDDModel {
    public function getProduits() {
        $sql = 'SELECT * FROM produit';
        $produits = $this->executer($sql);
        return $produits;
    }

    public function readProduitbyid($id_produit){

        $sql = 'SELECT * FROM `produit` WHERE ID_Produit = ?';
        $produits = $this->executerparam($sql, array($id_produit));

        return $produits;
    }
}

?>