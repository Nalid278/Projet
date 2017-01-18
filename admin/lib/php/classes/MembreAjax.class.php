<?php

class MembreAjax {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }

    function isAuthorized($login, $password) {
        $retour = array();
        try {
            $query = "select verifier_connexion2(:login,:password) as retour";
            $sql = $this->_db->prepare($query);
            $sql->bindValue(':login', $login);
            $sql->bindValue(':password', $password);
            $sql->execute();
            $retour = $sql->fetchColumn(0);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        return $retour;
    }

    public function getMembre($nom) {
        $query = "select * from utilisateur where nom=:nom";
        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $nom, PDO::PARAM_STR);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_clientArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_clientArray;
    }
 

        
    

}





