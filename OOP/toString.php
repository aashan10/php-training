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
        // this method will be invoked when
        // we try to echo the obj directly
        // instead of showing the fatal error
        public function __toString()
        {
            return "You have directly printed the object of a class (".__CLASS__.") !<br>";
        }
    }
    $obj = new User('Leah');
    $obj->say();
    echo $obj;
    var_dump($obj); //we can var_dump the object directly though
?>