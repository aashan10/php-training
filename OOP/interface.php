<?php

interface Test 
{
    const A=100;
}
interface Test1
{
    const Fruit = 'Apple';
}
interface Test2 extends Test,Test1 //multiple inheritance
{
    const B = 200;
    public function showValue();
}
class User{
    private $name;

    public function set($x)
    {
        return $this->name = $x;
    }
    
}
class Main extends User implements Test2{
    // class main in the child of the User and also implements the 
    // method declared in the 3dr interface 
    public function showValue()
    {
        echo "There are " .Test2::A  ." - " .Test2::B ." " . Test2::Fruit . "s in your basket " .$this->set('Joe') . " !";
    }
}
$main = new Main();
$main->showValue();
?>