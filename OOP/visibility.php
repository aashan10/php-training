<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    class File
    {
        public $data = "Some random data";
        // It is available everywhere
        protected $data1 = "It is protected but can be accessed by instances using this keyword";
         public function get()
         {
            return $this->data1;
         }

    }
    $file =new File();
    echo $file->data;
    echo "<br>";
    echo $file->get(); 
    // using get function we can access the protected
    // in the instance 


    echo "<br>";
    class Example
    {
        protected $data2 = "this can be access in the child class";
    }

    class ExampleChild extends Example {
        // public $data4;
        public function getData()
        {
           return $this->data2;
        }
    }
    $exampleChild = new ExampleChild();
    echo "<br>";
   echo $exampleChild->getData();




   class Fruit {
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      return $this->color = $n;
    }
    public function get_color($n)
    {
        return $this->set_color($n);
    }
    private function set_weight($n) { // a private function
      return $this->weight = $n;
    }
    public function get_weight($n)
    {
        return $this->set_weight($n);
    }
  }
  
  $mango = new Fruit();
  $mango->set_name('Mango'); // OK
  echo $mango-> get_color('Yellow'); 
  echo $mango->get_weight('300'); 
    ?>
</body>
</html>