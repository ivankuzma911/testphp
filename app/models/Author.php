<?php

class Author extends ParentModel {  

    public function __construct() {
        parent::__construct();        
    }
    
    public function getAll() {        
        return $this->db->query($this->queryBuilder
            ->select('author')
            ->from('authors')        
            ->value()
        );
    }    

    public function getIdByName($name) {             
        return $this->db->query($this->queryBuilder
            ->select('id')
            ->from('authors')    
            ->where("author = '$name'")    
            ->value()
        )[0]['id'];
    }
}

?>