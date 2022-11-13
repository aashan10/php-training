<?php 
  abstract class Person{
    public $name;
    public $age;

    function __construct($n,$a)
    {
        $this->name =$n;
        $this->age= $a;
    }
    public function display()
    {
        echo "This is an abstract class.<br>";
    }
    abstract public function show();
  }
  class Child extends Person{
    public function show()
    {
        echo 'This should work and give me the name= ' .$this->name . ' and age= ' .$this->age;
    }
  }
  $child = new Child('Leah',20);
  $child->show();
?>