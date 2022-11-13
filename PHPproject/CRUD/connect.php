<?php
    declare(strict_types=0);
    class Connect{
    private $server = "localhost";
    private $user = "root";
    private $password ="password";

    private function call()
    {
        try 
        {
            $conn = new PDO("mysql:hostname=$this->server,dbname=data",$this->user,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
             echo "Connected sucessfully";
             return $conn;
        } 
        catch (PDOException $e)
        {
            echo "Failed " . $e->getMessage();
        }
    }
    protected function print()
    {
        return $this->call();
    }
}

?>