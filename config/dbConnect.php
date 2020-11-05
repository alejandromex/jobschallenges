<?php

class Database{
    public static function connect()
    {
        $conn = new mysqli('localhost','root','','jobschallenge');
        $conn->query("SET NAMES 'utf8'");
        return $conn;
    }
}


?>