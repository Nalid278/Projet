<?php

class InfoClientDB extends InfoClient {

    private $_db;
    private $_infoArray = array();
    private $_variable="valeur";

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function getInfoClient($page) {
        try {
            $query = "SELECT * FROM gt_texte where page=:page";
            $resultset = $this->_db->prepare($query);           
            $resultset->bindValue(1,$page);
            $resultset->execute();
            $data = $resultset->fetchAll(); 
            
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = new InfoClient($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }

    //méthode qui affiche la valeur des variables après instanciation :
    /*$obj = new Classe();
    print $obj;
     */
    public function __toString() {
        return $this->_variable." ".$this->_db;
    }
    
}
