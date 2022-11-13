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
        public function __clone()
        {
            echo "You have cloned the object of a class (".__CLASS__.")!<br>";
        }
    }
    $obj = new User('Leah');
    $obj->say();
    $obj2 = Clone $obj;
    // this meethod workd when the object is copied
?>