<?php
class Calendar
{
    public $name;
     const Month = "this is a string";
     public static $days = 'SATURDAY';
     public static $count = 0;
    public $season = ['Spring','Summer','Winter','Autumn'];
     public function __construct()
     {
        self::$count++;
     }
    public function getMonth()
    {
        return self::Month;
    }

}
$calendar = new Calendar();
$calendar1 = new Calendar();

echo "<br> Accessing for instance " . $calendar::$days;
echo "<br>";

echo Calendar::Month . PHP_EOL;
echo "<br>";
echo $calendar->getMonth();
echo "<br>";
echo Calendar::$days;
echo "<br>";
echo Calendar::$count;

echo "<br>";
print_r($calendar->season);
?>

<!-- PART II -->

<?php 
echo "<br>";
echo "<br>";
class Test {
    public static $name = 'Light Stick'; //Static property
    public $a=10,$b=20;
    public static function add($x,$y) //static method
    {
        echo $x + $y ." " . self::$name . " in the pocket";
    }
    protected static function sub($x,$y)
    {
        echo $x - $y." " . self::$name . " in the shop";
    }
    public function display2($x,$y)
    {
        return self::sub($x,$y);
    }
}
class TestChild extends Test
{
    public static function addChild()
    {
        echo "From the child class the result is shown " . parent::$name ;
    }
    public static function display()
    {
        return parent::add(30,40);
    }
    
}
echo Test::$name;
echo "<br>";
echo Test::add(10,20);
echo "<br>";
echo "<br>";

TestChild::addChild();
echo "<br>";
echo "<br>";
$test = new TestChild();
$test-> display2(20,10);
?>