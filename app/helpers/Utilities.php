<?php

class Utilities {
    public static function isPost() {       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;
    }
    
    public static function redirect($url){
        header('Location: ' . $url);
    }

}

?>