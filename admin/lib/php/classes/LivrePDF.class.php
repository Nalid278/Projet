<?php

class LivrePDF {

    private $_db;
    private $_gateauxArray = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }
    
    public function getTousLesEbooks() 
    {
        try 
        {
            $query = "SELECT * FROM ebook";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        return $data;
    }
    
    public function getLivreById($id) {
        $_typeArray;
        try {
            $query = "SELECT * FROM ebook where id_ebook=:id_ebook";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $id, PDO::PARAM_INT);
            $resultset->execute();
            $data = $resultset->fetchAll();

            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        return $data;
    }
    
    

}
