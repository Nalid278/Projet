<?php

class MeslivresDB extends Membre {

    private $_db;

    public function __construct($db) {
        $this->_db = $db;
    }

    function commande($idmembre, $idbook, $date) {
        try {
            $query = "select commande(:idmembre,:idbook,:date);";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $idmembre, PDO::PARAM_INT);
            $resultset->bindValue(2, $idbook, PDO::PARAM_INT);
            $resultset->bindValue(3, $date, PDO::PARAM_STR);
            $resultset->execute();
            $retour = $resultset->fetchColumn(0);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        return $retour;
    }
    
    public function getMesLivres($id) {
        
        try {
            $query = "SELECT * FROM vue_livres where id_membre=:id_membre";
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
                $_typeArray[] = new Meslivres($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
    }

}
