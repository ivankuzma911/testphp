<?php

class Request {

    protected $getData,
              $postData;

    public function __construct($getData) {
        $this->getData = $getData;
        $this->postData = $_POST; 
        if(DEBUG){
            Debugger::info(array(
                'POST'=> $this->postData,
                'GET' => $this->getData
            ), 'request');
        }       
    }

    public function get($name = null) {
        if(!$name) return $this->getData; 
        if(isset($this->getData[$name])) return $this->getData[$name];
        return false;
    }

    public function post($name = null) {
        if(!$name) return $this->postData; 
        if(isset($this->postData[$name])) return $this->postData[$name];
        return false;
    }
}

?>