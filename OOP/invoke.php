<?php
    class User{
        public $name;
        public function __construct($n)
        {
            $this->name =$n;
        }
        public function say()
        {
            echo "Hello {$this->name}! <br>";
        }
        public function __invoke()
        {
            echo "You have called the object of a class (".__CLASS__.") as function!<br>";
        }
        // This method will be called when trying to call an object in way of calling the function
    }
    $obj = new User('Leah');
    $obj->say();
    $obj();
    // this return the Uncaught error if it wasn't for __invoke method()
?>