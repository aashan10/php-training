<?php 
class User{
    private $name;
    private $age;
    function __construct($n,$a)
    {
        $this->name =$n;
        $this->age =$a;
    }
    // __get() is used to read property from the unaccessible property
    // or alert it is undefined as in __call()
    public function __get($property)
    {
        // if the passed value is name property do this
        if($property == 'name')
        {
            return $this->name.'<br>' ;
        }
        // if the passed value is age property do this
        else if($property == 'age')
        {
            return $this->age.'<br>';
        }
        // if the value is undefined or trying to access the 
        // value that is not defined do this

        else {
            return "The property ({$property}) is not declared in the (".__CLASS__.")  class"; 
        }
    }
    public function display()
    {
       echo "Your name is $this->name and you are $this->age years old";
    }
}
$obj =new User('Apple',20);
echo $obj->people;
// since we dont have any property called people
// trying to read it will actually throw an error 
// but we have __get() where we have condition checked 
// and if it is not satisfied the else block will throw the 
// alert message 
echo "<br>";
echo "Name: " . $obj->name;
echo "Age: " .$obj->age;

?>