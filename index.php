<?php
    //fichier de route pour paramétrer les liens entre les fichiers et éviter que l'utilisateur n'accède à tous les fichiers
    require_once './models/AccesBDDModel.php';
    session_start();
    $url = '';

    if(isset($_GET['url'])){

        $url = explode('/', $_GET['url']);


        if($url[0] == 'accueil'){

            require './View/NavBarUtilisateursView.php';
            require_once './models/ProduitsModel.php';
            require './controllers/AccueilController.php';
            require_once './View/AccueilView.php';

        }

        elseif($url[0] == 'Connexion'){

            if (!isset($_SESSION['login'])){

                require './View/NavBarUtilisateursView.php';
                require_once './View/ConexionView.php';
                require_once './models/PersonneModel.php';
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

            require './View/NavBarUtilisateursView.php';

            require_once './models/PersonneModel.php';
            require_once './models/ProduitsModel.php';
            require_once './models/CommentaireModel.php';

            require './controllers/AdmindashboardController.php';
            require './View/AdminPannelView.php';    
        }

        elseif($url[0] == 'ModifierProfil'){

            require './View/NavBarUtilisateursView.php';
            require_once './models/PersonneModel.php';
            require_once './models/CommentaireModel.php';
        
            require './controllers/ModifierpersonneController.php';
            require './View/ModifPersonneView.php';

        }

        elseif($url[0] == 'ModifierProduit'){

            require './View/NavBarUtilisateursView.php';
            require_once './models/ProduitsModel.php';
            require './controllers/ModifierProduitsController.php';
            require './View/ModifierProduitView.php';

        }
        elseif($url[0] == 'ModifierCommentaires'){

            require './View/NavBarUtilisateursView.php';
            require_once './models/CommentaireModel.php';
            require './controllers/ModifierCommentairesController.php';
            require './View/ModifierCommentairesView.php';

        }
        elseif($url[0] == 'Inscription'){

            require './View/NavBarUtilisateursView.php';
            require_once './models/PersonneModel.php';
            require './controllers/AjouterPersonneController.php';
            require './View/InscriptionView.php';
            
        }


        
    }

    elseif(isset($_GET['produit'])){


        require './View/NavBarUtilisateursView.php';
        require './models/ProduitsModel.php';
        require './models/NoteModel.php';
        require './models/CommentaireModel.php';
        require './controllers/PageProduitController.php';
        require './View/PageProduitView.php';
        
    }

    else{

        require_once './View/ErreurView.php';
        
    }

?>