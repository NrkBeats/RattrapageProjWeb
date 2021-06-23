<?php
abstract class AccesBDDModel {
    protected $BDD;

    
    private function connect() { //connection à la BDD
        if ($this->BDD == null) {
            $this->BDD = new PDO('mysql:host=localhost;dbname=rattrapage;charset=utf8', 'root', '');
        }
        return $this->BDD;
    }

    
    protected function executer($sql) {
            $resultat = $this->connect()->query($sql);
            return $resultat;
    }

    protected function executerparam($sql, $parametres){

            $resultat = $this->connect()->prepare($sql);
            $resultat->execute($parametres);
        
            return $resultat;
    }
}
?>