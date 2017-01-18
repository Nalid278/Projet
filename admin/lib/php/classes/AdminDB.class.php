<?php

class AdminDB extends Admin {
    private $_db;
    
    public function __construct($db){
        $this->_db = $db;
    }
    
    function isAuthorized($login,$password) {
        
        $retour = array();
        try {
            $query="select verifier_connexion(:login,:password) as retour";
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':login',$login);
            $sql->bindValue(':password',$password);
            $sql->execute();
            $retour = $sql->fetchColumn(0);
        }catch(PDOException $e){
            print $e->getMessage();
        }
        return $retour;
    }
    
}
    
