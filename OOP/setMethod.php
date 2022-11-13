<?php
class User{
    private $name;
    private $age;   
    public function __set($property,$value)
    {
        // if the passed value is name property do this
        if($property == 'name')
        {
            $this->name = $value ;
        }
        // if the passed value is age property do this
        else if($property == 'age')
        {
             $this->age =$value;
        }
        // if the value is undefined or trying to access the 
        // value that is not defined do this

        else {
            echo "The property ({$property}) is not declared in the (".__CLASS__.")  class"; 
        }
    }
    public function display()
    {
       echo "Your name is $this->name and you are $this->age years old";
    }
}
$obj =new User();
$obj->name = 'Leah';
$obj->age = 20;
echo $obj->number = 50;


echo "<br>";
$obj->display();


?>