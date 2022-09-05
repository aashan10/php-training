<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input
        {
            display: block;
        }
        textarea
        {
            border: none;
            padding: 15px;
            width: 50%;
            display: block;
            margin-top: 20px;
            border-radius: 10px;
            background-color: #ededed;
        }
    </style>
</head>
<body>
<h2>This is another class</h2>
    <h3>This is a title</h3>
    <form action="assignment.php" method="POST">
        <input type="text" placeholder="text" name="text">
        <input type="text" placeholder="prepend" name="prepend">
        <input type="text" placeholder="append" name="append">

    <button>Connect</button>
    </form>

<div>
    <?php
        if(!empty($_POST))
        {
            $pre = $_POST['prepend'];
            $text = $_POST['text'];
            $append = $_POST['append'];

            $result = sprintf("%s %s %s",$pre,$text,$append);
            echo $result;
            // echo $pre . $text . $append;
        }
    ?>

</div>
</body>
</html>
<!-- 

str_replace() 3 parameter 
takes the variable,
 -->
<!-- 


 -->