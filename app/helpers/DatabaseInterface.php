<?php

interface DatabaseInterface
{
    public function connect();
    public function query($sql);
    public function disconnect();
}

?>