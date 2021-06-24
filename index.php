<?php
    require_once './models/AccesBDDModel.php';
    session_start();
    $url = '';

    if(isset($_GET['url'])){

        $url = explode('/', $_GET['url']);


        if($url[0] == 'accueil'){
            

            require_once './models/AccueilModel.php';
            require './controllers/AccueilController.php';
            require_once './View/AccueilView.php';

        }

        elseif($url[0] == 'Connexion'){

            if (!isset($_SESSION['login'])){

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


            require_once './models/PersonneModel.php';
            require './controllers/AdmindashboardController.php';
            require './View/AdminPannelView.php';    
        }

        elseif($url[0] == 'ModifierProfil'){

            require_once './models/PersonneModel.php';
            require './controllers/ModifierpersonneController.php';
            require './View/ModifPersonneView.php';

        }

        
    }

    else{

        require_once './View/ErreurView.php';
        
    }

?>