<?php
  class Dbh 
  {
    protected function connect()
    {
        try {
            $username = "root";
            $password = "password";
            $dbh = new PDO("mysql:host=localhost;dbname=users",$username,$password);
        } catch (PDOException $e) {
            echo "Error! : " . $e->getMessage() . "<br>";
            die();
        }
        
    }
  }
?>