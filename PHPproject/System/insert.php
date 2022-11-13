
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <?php
include('./connect.php');

try {
 
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $sql = "INSERT INTO myguests (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email')";
      $result = $conn->exec($sql);
      // use exec() because no results are returned

    //    echo "New record created successfully";
  if($result)
  {
    // echo "Data added";
    header('location: display.php');
  }
 
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;


?>
</body>
</html>