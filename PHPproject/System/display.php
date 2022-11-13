<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Attendance Page</title>
</head>
 
<body>
    <?php
    include_once('./connect.php');
    ?>
 
    <div class="container">
        <div class="row">
            <h2>Attendance</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Operation</th>

                    </tr>
                </thead>
 
                <tbody>
                    <?php
                        $a=1;
                        $stmt = $conn->prepare(
                                "SELECT * FROM myguests");
                        $stmt->execute();
                        $users = $stmt->fetchAll();
                        foreach($users as $user)
                        {
                    ?>
                    <tr>
                        <td>
                            <?php echo $user['id']; ?>
                        </td>
                        <td>
                            <?php echo $user['firstname']; ?>
                        </td>
                        <td>
                            <?php echo $user['lastname']; ?>
                        </td>
                        <td>
                            <?php echo $user['email']; ?>
                        </td>
                        <td>
                        <button type="button" class="btn btn-primary mx-3"><a href="update.php?id=<?php echo $user["id"];?>" class="text-light" >Update</a> </button>
                            <button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $user["id"];?>" class="text-light" >Delete</a></button>
                        </td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
 
            <input class="btn btn-primary"
                    type="submit" value="Submit">
        </div>
    </div>
</body>
 
</html>