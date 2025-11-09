<?php

abstract class Shape {
    const UNIT = "cm²";
    
    abstract public function area();
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function area() {
        return $this->width * $this->height;
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return pi() * ($this->radius ** 2);
    }
}

$rectangle = new Rectangle(10, 5);
$circle = new Circle(5);

echo "Rectangle area: " . $rectangle->area() . " " . Shape::UNIT . "\n";
echo "Circle area: " . round($circle->area(), 1) . " " . Shape::UNIT . "\n";

?>