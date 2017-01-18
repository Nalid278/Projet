<?php

class LivreDB extends Livre {

    private $_db;
    private $_typeArray = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    function insert($titre, $page, $ref, $date) {
        try {
            $query = "select ajout_livre(:titre,:page,:ref,:date);";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $titre, PDO::PARAM_STR);
            $resultset->bindValue(2, $page, PDO::PARAM_INT);
            $resultset->bindValue(3, $ref, PDO::PARAM_STR);
            $resultset->bindValue(4, $date, PDO::PARAM_STR);
            $resultset->execute();
            $retour = $resultset->fetchColumn(0);

            
        } catch (PDOException $e) {
            print $e->getMessage();
        }
        return $retour;
    }
    
    public function getTousLesLivres() {
        try {
            $query = "SELECT * FROM ebook";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();

            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_typeArray[] = new Livre($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
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

        while ($data = $resultset->fetch()) {
            try {
                $_typeArray[] = new Livre($data);
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_typeArray;
    }
    
    public function updateLivres($id,$titre,$nb_pages,$date_sortie,$reference) {
        try {
            $query = "UPDATE ebook set titre=:titre, reference=:reference, date_sortie=:date_sortie, nb_pages=:nb_pages where id_ebook=:id_ebook";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(1, $titre, PDO::PARAM_STR);
            $resultset->bindValue(2, $reference, PDO::PARAM_STR);
            $resultset->bindValue(3, $date_sortie, PDO::PARAM_STR);
            $resultset->bindValue(4, $nb_pages, PDO::PARAM_INT);
            $resultset->bindValue(5, $id, PDO::PARAM_INT);
            $resultset->execute();
            //$data = $resultset->fetchAll();
            $count = $resultset->rowCount();
            return $count;

            //$resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        
    }
    
    public function deleteLivre($id) {
        try {
            $query = "DELETE from ebook where id_ebook=:id_ebook";
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
