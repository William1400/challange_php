<?php

include_once('Router.php');

/**
 * Main application class.
 */
class Application
{

    private $router;

    function __construct() {
        
        $host = 'localhost';
        $db = 'cogip';
        $username = 'root';
        $password = '';
        $charset = 'utf8';

        $connect = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [

            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false
        ];
       
        $pdo = new \PDO($connect, $username, $password, $options);
        
        $this->router = new Router($pdo);
    }
}
