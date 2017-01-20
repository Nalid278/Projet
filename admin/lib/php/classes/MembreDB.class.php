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
            $sql->bindValue(':password', md5($password));
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
            $resultset->bindValue(1, $pseudo, PDO::PARAM_STR);
            $resultset->bindValue(2, md5($mdp), PDO::PARAM_STR);
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
    
    public function getUtilisateurById($id) {
        
        try {
            $query = "SELECT * FROM utilisateur where id_membre=:id_membre";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $id, PDO::PARAM_INT);
            $resultset->execute();
            $data = $resultset->fetchAll();

            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_typeArray[] = new Membre($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
    }
    
    
    public function getTousLesUtilisateurs() {
        try {
            $query = "SELECT * FROM utilisateur";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();

            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_typeArray[] = new Membre($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
    }
    
    public function updateMembres($id,$pseudo,$mdp,$nom,$prenom,$email) {
        try {
            $query = "UPDATE utilisateur set pseudo=:pseudo, mdp=:mdp, nom=:nom, prenom=:prenom, email=:email where id_membre=:id_membre";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $pseudo, PDO::PARAM_STR);
            $resultset->bindValue(2, $mdp, PDO::PARAM_STR);
            $resultset->bindValue(3, $nom, PDO::PARAM_STR);
            $resultset->bindValue(4, $prenom, PDO::PARAM_STR);
            $resultset->bindValue(5, $email, PDO::PARAM_STR);
            $resultset->bindValue(6, $id, PDO::PARAM_INT);
            $resultset->execute();
            //$data = $resultset->fetchAll();
            $count = $resultset->rowCount();
            return $count;

            //$resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        /*while ($data = $resultset->fetch()) {
            try {
                $_typeArray[] = new Livre($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;*/
    }
    
    public function deleteMembre($id) {
        try {
            $query = "DELETE from utilisateur where id_membre=:id_membre";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $id, PDO::PARAM_INT);
            $resultset->execute();
            //$data = $resultset->fetchAll();
            $count = $resultset->rowCount();
            return $count;

            //$resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        
    }

}
