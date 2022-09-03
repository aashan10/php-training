<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h2>Simple interest Calculator</h2>
    <form action="requests.php" method="GET">
        <!-- name attribute is important 
              we access this in the php -->
        <input placeholder="Principal" type="number" name="principle"/>
        <input placeholder="Time"
        type="number" name="time"/>
        <input placeholder="Rate" type="number" name="rate"/>

        <button>Calculate</button>
    </form>

    <pre>
    <?php
        $messages = []; //array declared

      // $_GET is a super global variable which is used to collect form data 
     //never use it to send the private information

        if(!empty($_GET)) {
            //checking if the GET is empty

            if(!isset($_GET['principle']) || empty($_GET['principal'])) {
                //isset() is the function that checks whether a 
                //variable is set, which means that it has to be declared and is not NULL
                //if the principle has no value set or if it is empty
                //following message will be printed..
                
                $messages[] = "Principle is not set!";
            }

            if(!isset($_GET['rate']) || empty($_GET['rate'])) {
                $messages[] = "Rate is not set!";
            }

            if(!isset($_GET['time']) || empty($_GET['time'])) {
                $messages[] = "Time is not set!";
            }
            
            // value received from input field is passed to the php var
            $principle = $_GET['principle'];
            $rate = $_GET['rate'];
            $time = $_GET['time'];

            //if none of the variable is empty
            if(!empty($principle) && !empty($rate) && !empty($time)) {
                //this operation is done
                $si = ($principle * $rate * $time) / 100;
                
                //display the result
            echo sprintf("Your simple interest is : %s", $si);   
            }
        }

        
    ?>
    </pre>

    <?php
        //there might be 3 element in $message array if 
        //no value is given
        //using the foreach loop to display all the message in the array
        //that is generated 
        foreach($messages as $message) {
            echo $message . "<br/>";
        }
    ?>
</body>
</html>