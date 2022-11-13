<?php

 class Person
 {
    // create properties
public $name;
public $username;
public $followerCount;
 }
//  create the object from the class
 $obj =new Person();
 print_r($obj);

 $obj->name= 'Abc Abc';
 $obj->username= '@Abc_Abc';
echo "<br>";
 $obj->followerCount= 50;
 print_r($obj);


 class Fruit{
    public $name;
    public $color;

    public function describe()
    {
        echo $this->name . " is my favorite fruit and it's color is " . $this->color . ".";
    }
 }

 $apple = new Fruit();
 $apple->name= 'Apple';
 $apple->color='Red';
echo "<br>";
 print_r($apple->describe());
echo "<br>";
 print_r($apple);


 class Basket{
    public $itemsTotal;
    public $shippingCost;
    public $discount;
    public function calTotal()
    {
       return( $this->itemsTotal + $this->shippingCost - $this->discount);
    }
 }

 $obj1 = new Basket();

 $obj1->itemsTotal=200;
 $obj1->shippingCost=15000;
 $obj1->discount=30;

echo "<br>";
 var_dump($obj1);
echo "<br>";

 var_dump($obj1->calTotal());


// OBJECT INTERACTION
 class Song{
    public $songId;
    public $title;
 }
echo "<br>";
 $Octopus =new Song();
 $Octopus->songId =1;
 $Octopus->title = "Octopus's Garden";
 $anything = new Song();
 $anything->songId = 2;
 $anything->title= "Anything";
 var_dump($Octopus);

 

  class Playlist{
    public $name;
    public $songs = []; 
    //empty array to stack all the songs in the array
     public function add($x)
     {
        $this->songs[] = $x;
     }
    }
    $playlist = new Playlist();
    $playlist->name = 'Indie~';
    $playlist->add($Octopus); //passing the object
    // this means the songs array will have the object and its property and value
    $playlist->add($anything);
    echo "<br>";
    print_r($playlist);
?>