<?php
class ParentModel{  

    protected $db;
    protected $queryBuilder;

    public function __construct(){
        $this->db = new DB();
        $this->queryBuilder = new QueryBuilder();
    }
}