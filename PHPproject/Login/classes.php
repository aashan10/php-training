<?php
class Signup extends Dbh{
protected function checkUser($uid,$email)
{
    $stmt = $this->connect()->prepare('select users_uid from users where users_uid = ? or users_email =?;');
    if($stmt->execute(array($uid,$email)))
    {
        $stmt = null;
        header("location: ./index.php?error=stmtfailed");
        exit();
    }
    $resultCheck;
    if($stmt->rowCount()>0)
    {
       $resultCheck =false;
    }
    else 
    {
       $resultCheck =true;

    }
    return $resultCheck;

}
}
?>