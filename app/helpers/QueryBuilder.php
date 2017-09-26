<?php

class QueryBuilder{

    public $query;

    public function select($val) {
        if (is_array($val)){
            $val = implode(",", $val);            
        }

        $this->query .= "SELECT $val";
        return $this;
    }
    
    public function from($table) {
        $this->query .= ' FROM ' . $table;
        return $this;
    }

    public function join($joinType, $table) {
        $this->query .= " $joinType JOIN " . $table;
        return $this;
    }

    public function on($val) {
        $this->query .= ' ON ' . $val;
        return $this;
    }

    public function where($val) {
        $this->query .= ' WHERE ' . $val;
        return $this;
    }
    
    public function value() {        
        $query = $this->query;       
        $this->query = '';              
        return $query;
    }

    public function limit($limit){
        $this->query .= ' LIMIT ' . $limit;
        return $this;
    }

    public function offset($offset) {
        $this->query .= ' OFFSET ' . $offset;
        return $this;
    }

    public function like($params ){
        $this->query .= $params[0] . ' LIKE ' . $params[1];        
        return $this;
    }

    public function insert($table) {
        $this->query .= "INSERT INTO $table" ;
        return $this;
    }

    public function columns($columns) {        
        $this->query .= "(" . implode(',', $columns) . ")";
        return $this;
    }

    public function values($values) {
        $this->query .= " VALUES ('" . implode("','", $values) . "')";
        return $this;
    }
    
    public function update($table) {
        $this->query .= " UPDATE $table";
        return $this;
    }

    public function set($values) {
        $this->query .= " SET " . implode(",", $values);
        return $this;
    }
}

?>