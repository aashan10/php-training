<?php
declare(strict_types=0);
require './todoControl.php';


if(!empty($_POST['submit-todo']) && isset($_POST['submit-todo']))
{
        $todo =$_POST['todo'];
        $todoAdd = new todoControl();
        echo $todoAdd->addI($todo);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-PHP</title>
</head>
<body>
   <?php 
        // $conn =new Connect();
        // // $dbconn = $conn->print();

        // if(!empty( $dbconn) && isset($dbconn))
        // {
        //     echo 'Database connected'; 
        // }
        // else 
        // {
        //     die('connection failed');
        // }
       
    ?> 
    <section class="">
        <h1 class="heading">Todos</h1>
        <form action="" method="POST" class="" id="todoForm">
            <input type="text" name="todo" placeholder="Enter your todo---" required/>
            <input type="submit" name="submit-todo" value="ADD" form="todoForm">
        </form>
    </section>
</body>
</html>