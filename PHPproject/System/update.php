<?php
include 'connect.php';

$id=$_GET['id'];
if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];



try {
   
        $sql="update myguests set id=$id,firstname='$firstname',lastname='$lastname',email='$email' where id=$id";
      $conn->exec($sql);
      echo "DONE";
            // header('location: display.php');
} catch (PDOException $e) {
   echo "Failed "  . $e->getMessage();
}}
$conn = null;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container my-5">
        <div class="row">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your fname" name="firstname">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your fname" name="lastname">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Enter your lname" name="email">
                </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</body>
</html>