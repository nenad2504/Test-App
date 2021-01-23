<?php

namespace app\Model;
use PDO;


require 'app/config/config.php';

class Product {

    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    private $conn;

    public function __construct()
    {
        try {
        $this->pdo =  new PDO('mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName, $this->dbUser, $this->dbPass);
        $conn = $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'good';
        } catch (PDOException $e) {
            echo "connection filed" . $e->getMessage();
        }
    }

    public function select(){

        $query = "SELECT * FROM products";
    
        $result = $this->pdo->prepare($query); 
        $result->execute(); 
        $rows = $result->fetchAll();
      
        return $rows; 
    
     }
}



    


