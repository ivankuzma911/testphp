<?php

class ParentController
{
    private $view,
            $model,
            $controller;
           

    public function __construct() {
        $this->initModels();
    }

    private function initModels() {        
        foreach($this->models as $model){
            $this->{$model} = new $model;
        }
    }
}

?>