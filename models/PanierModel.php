<?php 

class Panier extends AccesBDDModel {

//méthode permettant de créer un panier (utile pour les nouvelles personnes qui s'inscrivent)
    public function CreatePanier($id_personne){

        $sql = "INSERT INTO `panier` (`Etat`,`ID_Client`) VALUES (0,?)";
        $panier = $this->executerparam($sql, array($id_personne));

        return $panier;    
    }

    public function InsertElement($id_panier,$id_produit){

        $sql = "INSERT INTO `concerne` (`ID_panier`,`ID_Produit`, `Quantite` ) VALUES (?,?,1)";
        $panieradd = $this->executerparam($sql, array($id_panier,$id_produit));

        return $panieradd;
    }

    public function ReadPanierID($id_personne){

        $sql = "SELECT * FROM `panier` WHERE ID_CLIENT = ?";
        $panier = $this->executerparam($sql, array($id_personne));

        return $panier;    
    }

    public function ReadArticles($id_panier){

        $sql = "SELECT * FROM concerne INNER JOIN produit ON concerne.ID_Produit = produit.ID_Produit  WHERE ID_Panier = ? ";
        $panier = $this->executerparam($sql, array($id_panier));

        return $panier;

    }

    public function UpdateQuantite($id_article,$quantite,$id_panier){

        $sql = 'UPDATE concerne SET Quantite = ? WHERE ID_Produit = ? AND ID_Panier = ?';
        $panier = $this->executerparam($sql, array($quantite,$id_article,$id_panier));

        return $panier;
    }

    public function deleteelementvide($id_article,$idpanier){

        $sql = 'DELETE FROM `concerne` WHERE ID_panier = ? AND ID_Produit = ? AND Quantite = 0';
        $panierdel = $this->executerparam($sql, array($idpanier,$id_article));

        return $panierdel;

    }

    public function deletepanier($id_personne){


        $sql = 'DELETE FROM concerne WHERE concerne.ID_panier IN (SELECT ID_panier FROM panier WHERE panier.ID_Client = ?);
        DELETE FROM panier WHERE ID_Client = ?';
//supprime ce qui se trouve dans la table concerne en plus du panier 
        $deletepanier = $this->executerparam($sql, array($id_personne));

        return $deletepanier;

    }




}





?>