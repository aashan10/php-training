<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        h2 
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Simple interest Calculator</h2>
    <h3>Using POST method</h3>
    <form action="classII.php" method="POST">
    <!-- using get is not secure -->
        <label for="">Principle
         <input type="number" name="p"><br></label>
         <label for="">Time <input type="text" name="t"><br></label>
        <label for="">Rate<input type="text" name="r"><br></label>
        <button type="submit">Submit</button>
    </form>
    <pre>
    <?php 
     $message = [];
     if(!empty($_POST)){

        if(!isset($_POST['p']) || empty($_POST['p']) )
        {
            // this function def
            //boolean
            //checking if the value is passed from the input field
            //of principle or not
            $message[]= "Principle is not set!";
        }
        if(!isset($_POST['r']) || empty($_POST['r'])) {
            $message[] = "Rate is not set!";
        }

        if(!isset($_POST['t']) || empty($_POST['t'])) {
            $message[] = "Time is not set!";
        }
     $principle = $_POST['p'];
     $rate = $_POST['r'];
     $time = $_POST['t'];

        
     if(!empty($principle) && !empty($rate) && !empty($time)) {
        $si = ($principle * $rate * $time) / 100;

    echo sprintf("Your simple interest is : %s", $si);   
    }
     }
    ?>
    
    </pre>
    <?php
        foreach($message as $message) {
            echo $message . "<br/>";
        }
    ?>
</body>
</html>