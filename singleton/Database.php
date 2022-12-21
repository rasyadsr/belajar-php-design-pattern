<?php 

class Database {

    private static ?PDO $connection = null;

    public static function connect()
    {
        if (self::$connection === null) {
            return new PDO('mysql:host=localhost;dbname=example', 'root', '');
        }
        return self::$connection;
    }

}