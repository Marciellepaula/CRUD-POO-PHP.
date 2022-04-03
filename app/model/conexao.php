<?php
namespace App\model;

use \PDO;
use \PDOException;

class conexao{
    
    private static $instance;

    public static function getConn(){
        if (!isset(self::$instance)):
             self::$instance =  new \PDO('mysql:host=localhost:3306;dbname=pdo', 'root', '929266');  
        endif;
        return self::$instance;
    }
}