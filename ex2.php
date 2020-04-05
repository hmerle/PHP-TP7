<?php

abstract class Shape{
    abstract function getArea();
}

class Square extends Shape {
    private $height;
    private $width;
    function getArea(){
        return $this->height * $this->width;
    }
    function __construct($h, $w){
        $this->height = $h;
        $this->width = $w;
    }
}

class Circle extends Shape {
    private $radius;
    function getArea(){
        return 3.14159 * $this->radius * $this->radius;
    }
    function __construct($r){
        $this->radius = $r;
    }
}

function testShapes(){
    $s = new Square(5,5);
    $c = new Circle(7);
    $array = array($s, $c);
    for($i = 0; $i < sizeof($array); $i++){
    echo get_class($array[$i])." Area : ".$array[$i]->getArea()."<br>";
    }
}

testShapes();