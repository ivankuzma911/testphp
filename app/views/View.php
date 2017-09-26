<?php
class View {

    private $folder;
    private $data = array();

    public function __construct($folder){
        $this->folder = $folder;
    }  

    public function set($to_view){
        $this->data = $to_view;
        return $this->data;
    }

    public function render($file){
        extract($this->data);        
        include ($this->folder."/" . $file . ".php");
    }
}