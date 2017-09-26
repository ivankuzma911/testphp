<?php

class Debugger {
    public static function info($data, $name = ""){
        var_dump(
            "<div class='debug'>",
                "DEBUG: $name",
                $data,
            "</div>"
        );
    }
}

?>