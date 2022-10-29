<?php
try {
    $servername = "localhost";
    $dbname = "example";
    $username = "root";
    $password = "password";
 
    $conn = new PDO(
        "mysql:host=$servername; dbname=example",
        $username, $password
    );
     
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
     
} catch(PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}
?>