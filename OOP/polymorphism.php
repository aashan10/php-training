<?php 
  interface Shape
  {
    public function calculate();
  }
  class Circle implements Shape 
  {
    private $radius;
    public function __construct($r)
    {
        $this->radius = $r;
    }
    public function calculate()
    {
        echo 'Area of circle = ' . pi()*$this->radius *$this->radius . '<br>';
    }
  }
  class Rectangle implements Shape{
    private $height;
    private $width;
    public function __construct($h,$w)
    {
        $this->height = $h;
        $this->width =$w;
    }
    public function calculate()
    {
        echo "Area of rectangle is " . $this->height * $this->width . '<br>';
    }
  }
  class Triangle implements Shape{
    private $base;
    private $height;

    public function __construct($b,$h)
    {
        $this->base = $b;
        $this->height = $h;
    }
    public function calculate()
    {
        echo 'Area of triangle = ' . ($this->base * $this->height)/2;
    }
  }
  $circle = new Circle(5);
  $rect = new Rectangle(10,20);
  $tri = new Triangle(10,30);

  $circle->calculate();
  $rect->calculate();
  $tri->calculate();
?>