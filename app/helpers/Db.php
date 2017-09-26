<?php

class DB implements DatabaseInterface{

    public $connect;
    
    public function __construct(){
       $this->connect();
    }
    
    public function query($sql){            
        $data = $this->connect->query($sql)->fetchAll();
        if(DEBUG){
            Debugger::info($sql,'SQL query');
            Debugger::info($data,'SQL result');
        }  
        return $data;
    }

    public function connect(){
        $this->connect = new PDO('mysql:host=' . HOSTNAME . ';dbname='. DATABASE, USERNAME, PASSWORD);
    }

    public function disconnect(){
        $this->connect = null;
    }
}

?>