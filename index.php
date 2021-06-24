<?php
    session_start();
    $url = '';

    if(isset($_GET['url'])){

        $url = explode('/', $_GET['url']);


        if($url[0] == 'accueil'){
            
            require_once './models/AccesBDDModel.php';
            require_once './models/AccueilModel.php';
            require './controllers/AccueilController.php';
            require_once './View/AccueilView.php';

        }

        if($url[0] == 'Connexion'){

            if (!isset($_SESSION['login'])){


                require_once './View/ConexionView.php';
                require_once './models/PersonneModel.php';
                require_once './controllers/ConnexionController.php';
                
            }
            
            else {

                require_once './View/DeconnexionView.php';
            }
        }

        if($url[0] == 'deconnexion'){
            
            require_once './controllers/DeconnexionController.php';
        
        }
    }

    else{

        require_once './View/ErreurView.php';
        
    }

?>