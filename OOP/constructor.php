<?php
declare(strict_types=1);

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
    <?php
    // require statement will copy everything from the 
    //specified file to this file, similar to import
    require 'comment.php';
    $comment = new Comment('This is comment text from user','UserName');
    

    echo "<h3> $comment->user</h3>";
    echo "<p>$comment->text</p>";

    ?>

    <!--  

    --whenever we use new keyword then that constructor method 
    --will be called and whatever code is inside it will be executed
    -->
</body>
</html>