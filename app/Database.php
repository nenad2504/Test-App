<?php

namespace app;
use PDO;


require 'app/config/config.php';

class Database {

    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    public $conn;

    public function connect()
    {
        try {
        $this->pdo =  new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName, $this->dbUser, $this->dbPass);
        $conn = $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'good';
        } catch (PDOException $e) {
            echo "connection filed" . $e->getMessage();
        }

        return $this->conn;
    }
    
    
 

}