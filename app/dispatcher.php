<?php
include('config.php');

class Dispatcher {  

    private  $path,
             $controller = 'Books',
             $method = 'main',
             $request = array();

    public function __construct() {
        $this->autoload();        
    }         

    public function run() {        
        $this->path = explode('/', $_SERVER['REQUEST_URI']);       
        $this->path[1] != "" ? $this->controller = $this->path[1] : '';
        if(isset($this->path[2]) && $this->path[2] != ""){
            $params = explode('?',$this->path[2]);            
            $this->method = $params[0];  
            if(isset($params[1]) && $params[1] != '') {
                $params =  explode('&',$params[1]);         
                foreach($params as $param){
                    $keyVal =  explode('=',$param);
                    $this->request[$keyVal[0]] = $keyVal[1];
                }
            }            
        }            
     
        $controller = new $this->controller();        
        $controller->request = new Request($this->request);
        $controller->{$this->method}();               
    }

    private function autoload() { 
        spl_autoload_register(function($class_name) {
            $array_paths = array(
                'app/', 
                'controllers/',
                'models/',
                'helpers/',
                'views/'
            );            

            foreach($array_paths as $path) {   
                if(is_file('./app/' . $path . $class_name . '.php')) {                    
                    include './app/' . $path . $class_name . '.php';
                }         
            }
        });  
    }
}

