<?php
require_once __DIR__.'/Config.php';
class Connection extends Config{
    public static $connection;
    public function __construct(){
        self::$connection = mysqli_connect(
            self::DB_HOST,
            self::DB_USER,
            self::DB_PASSWORD,
            self::DB_NAME,
        );

        if(!self::$connection){
            die("Connection Error: ". mysqli_connect_error());
        }
    }

}

