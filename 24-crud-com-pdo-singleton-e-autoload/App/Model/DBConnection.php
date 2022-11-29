<?php
namespace App\Model;
class DBConnection {
    private static $instance;
    public static function getDBConnection(){
        if(isset(self::$instance))
            return self::$instance;
        return self::$instance = new PDO('mysql:host=127.0.0.1;dbname=php_orientado_a_objectos;charset=utf8;', 'root', 'root');
    }
}