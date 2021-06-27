<?php

    //vérification de la connexion et redirection si problème

    if(!isset($_SESSION['login'])){

        header('Location: http://rattrapagegit/?url=Connexion');
    }

    else {

         //récupération de l'ID du panier

         $objpanier = new Panier;
         $panier = $objpanier->ReadPanierID($_SESSION['ID'])->fetchAll();
         $articlepanier = $objpanier->ReadArticles($panier[0][0])->fetchAll();

         for ($i = 0; $i <= count($articlepanier)-1; $i++) {

            if($articlepanier[$i][2]>$articlepanier[$i][6]){

                //modifie la quantité du panier en fonction du stock si la quantité saisie est trop grande
                $articlepanier[$i][2]=$articlepanier[$i][6];
                $modif = $objpanier->UpdateQuantite($articlepanier[$i][1], $articlepanier[$i][6], $articlepanier[$i][0]);

                

                

            }

            $panierdel = $objpanier->deleteelementvide($articlepanier[$i][1], $articlepanier[$i][0]);
            //supprime tous les éléments du panier où la quantite est a 0 pour éviter de commander des produits sans stock 
            //ou pour supprimer un élément de son panier
        }

        

         //vérification du niveau de stock avant affichage du panier
         //si une modification de la quantité a été paramétrée
         //alors on vérifie que le stock du produit sélectionné est suffisant

        if (isset($_POST['modifqte'])){

            $updatequantite = $objpanier->UpdateQuantite($_POST['produit'],$_POST['modifqte'],$panier[0][0]);
            header('Location: http://rattrapagegit/?url=Panier');

                       
                                    
        }




         


    }
 ?>