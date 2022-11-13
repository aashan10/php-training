<?php 
include 'connect.php';
try {
        $sql="delete from myguests where id=' " . $_GET["id"] . "'";
      $conn->exec($sql);
            header('location: display.php');
} catch (PDOException $e) {
   echo "Failed "  . $e->getMessage();
}
$conn = null;



?>