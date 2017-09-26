<?php

class Genre extends ParentModel {  

    public function __construct() {
        parent::__construct();        
    }
    
    public function getAll() {       
        return $this->db->query($this->queryBuilder
            ->select('genre')
            ->from('genres')        
            ->value()
        );
    }

    public function getIdByName($name){       
        return $this->db->query($this->queryBuilder
            ->select('id')
            ->from('genres')    
            ->where("genre = '$name'")    
            ->value()
        )[0]['id'];
    }
    
}

?>