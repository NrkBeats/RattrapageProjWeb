<?php
    //fichier de route pour paramétrer les liens entre les fichiers et éviter que l'utilisateur n'accède à tous les fichiers
    require_once './models/AccesBDDModel.php';
    require_once './models/AdresseModel.php';
    require_once './models/CommentaireModel.php';
    require_once './models/LikeModel.php';
    require_once './models/PanierModel.php';
    require './models/ProduitsModel.php';
    require './models/NoteModel.php';
    require_once './models/PersonneModel.php';
    require './View/NavBarUtilisateursView.php';
    
    session_start();
    $url = '';

    if(isset($_GET['url'])){

        $url = explode('/', $_GET['url']);


        if($url[0] == 'accueil'){

            require './controllers/AccueilController.php';
            require_once './View/AccueilView.php';

        }

        elseif($url[0] == 'Connexion'){

            if (!isset($_SESSION['login'])){

                require_once './View/ConexionView.php';
                require_once './controllers/ConnexionController.php';
                
            }
            
            else {
                require './View/DeconnexionView.php';
            }
        }

        elseif($url[0] == 'deconnexion'){
            
            require './controllers/DeconnexionController.php';
        
        }
        elseif($url[0] == 'Dashboard'){

            require './controllers/AdmindashboardController.php';
            require './View/AdminPannelView.php';
                
        }

        elseif($url[0] == 'ModifierProfil'){

            require './controllers/ModifierpersonneController.php';
            require './View/ModifPersonneView.php';

        }

        elseif($url[0] == 'ModifierProduit'){

            require './controllers/ModifierProduitsController.php';
            require './View/ModifierProduitView.php';

        }
        elseif($url[0] == 'ModifierCommentaires'){

            require './controllers/ModifierCommentairesController.php';
            require './View/ModifierCommentairesView.php';
            

        }
        elseif($url[0] == 'Inscription'){

            require './controllers/AjouterPersonneController.php';
            require './View/InscriptionView.php';
            
        }

        elseif($url[0] == 'AjouterAdresse'){

            require './View/AjouterAdresseView.php';
            require './controllers/AjouterAdresseControler.php';
            
        }

        elseif($url[0] == 'Panier'){

            require './controllers/PanierController.php';
            require './View/PanierView.php';
        }


        
    }

    elseif(isset($_GET['produit'])){

        require './controllers/PageProduitController.php';
        require './View/PageProduitView.php';
        
    }

    elseif(isset($_GET['commentaire'])){

        require './controllers/LikeController.php';
    }

    else{

        require_once './View/ErreurView.php';
        
    }

?>