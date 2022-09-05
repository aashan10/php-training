<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest</title>
</head>
<body>

        <div class="conatiner">

            <form action="calculator.php" method="post">
                <input placeholder="Principal" type="number" name="principal" id="principal"/>
                <input placeholder="Time" type="number" name="time" id="time" />
                <input placeholder="Rate" type="number" name="rate" id="rate"/>

                <button>Calculate</button>
            </form>
        </div>

        <pre>
            <?php
            $messages =[];

            if(!empty($_POST)){

                if(isset($_POST['principal']) || empty($_POST['principal'])){
                    $messages[] = "Principal is not set!";
                }

                if(!isset($_POST['rate']) || empty($_POST['rate'])) {
                    $messages[] = "Rate is not set!";
                }
    
                if(!isset($_POST['time']) || empty($_POST['time'])) {
                    $messages[] = "Time is not set!";
                }
                
    
                $principal = $_POST['principal'];
                $rate = $_POST['rate'];
                $time = $_POST['time'];
        
                if(!empty($principal) && !empty($rate) && !empty($time)) {
                    $si = ($principal * $rate * $time) / 100;
        
                echo sprintf("Your simple interest is : %s", $si);   
                }
            }
            
            ?>
        </pre>



</body>
</html>