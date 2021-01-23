<?php

namespace app\Model;
use PDO;

class Comment {

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

        $query = "SELECT * FROM comments";
    
        $result = $this->pdo->prepare($query); 
        $result->execute(); 
        $rows = $result->fetchAll();
      
        return $rows; 
    
     }

     public function insert($name, $email, $text){
  

        $query = "INSERT INTO comments (name, email, text) VALUES (:name, :email, :text)";         
                   
        $pripadeQuery = $this->pdo->prepare($query);
  
              $pripadeQuery->bindParam(":name", $name);
              $pripadeQuery->bindParam(":email", $email);
              $pripadeQuery->bindParam(":text", $text);
         
                     
        $rez = $pripadeQuery->execute();
        return $rez;
  
    }
}