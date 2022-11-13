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
    <form action="string.php" method="POST">
        <textarea name="text" id="" cols="30" rows="10" placeholder="Write something"></textarea>
        <input type="text" placeholder="find" name="find"><br>
        <input type="text" placeholder="replace" name="replace"><br>
    <button>Find and replace</button>
    </form>
    
<?php
// var_dump($_POST);

if(!empty($_POST))
{
    $text = $_POST["text"];
    $find = $_POST["find"];
    $replace = $_POST["replace"];

    $replaced = str_replace($find,$replace,$text);
    echo $replaced;
}
//post will have data only it is pushed
//else post will show some different data
//thus we will do the operation only if the post is not empty
?>
<div>

</div>
</body>
</html>
<!-- 

str_replace() 3 parameter 
takes the variable,
 -->
<!-- 


 -->