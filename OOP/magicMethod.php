<?php
// __call()
class User{
    // magic method __construct is invoked automatically
    // when instantiating
    public function __construct()
    {
        echo 'Constructor is called! <br> ';
    }
    public function __call($func,$arg)
    {
        // these parameter works like an array 
      echo "<br>Function ({ $func}) you called does not exist in the (".__CLASS__.") class! <br>";
      print_r($arg);
    }
}
$obj = new User();
// insert() is not defined anywhere in the class
// when we call the undefined class php throws the error 
// instead of showing error we can give a alert message by using the call method
// while calling undefined method the message in the __call() will be shown
// so __call() is invoke when the undefined or un accessible method is called
$obj->insert();
$obj->update('Name',20);

?>