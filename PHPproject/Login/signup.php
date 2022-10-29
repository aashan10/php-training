<?php 

if(isset($_POST['submit']))
{
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST['pwdRepeat'];
    $email = $_POST['email'];

    include './classes.php';
    include './control.php'; 

    $signup = new Control($uid,$pwd,$pwdRepeat,$email);
}