<?php

class MembreDB extends Membre {

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

    function inscription($pseudo, $mdp, $email, $nom, $prenom) {
        try {
            $query = "select inscription(:pseudo,:mdp,:email,:nom,:prenom);";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, pseudo, PDO::PARAM_STR);
            $resultset->bindValue(2, $mdp, PDO::PARAM_STR);
            $resultset->bindValue(3, $email, PDO::PARAM_STR);
            $resultset->bindValue(4, $nom, PDO::PARAM_STR);
            $resultset->bindValue(5, $prenom, PDO::PARAM_STR);
            $resultset->execute();
            $retour = $resultset->fetchColumn(0);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        return $retour;
    }

}
