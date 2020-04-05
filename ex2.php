<?php

interface Shape{
    function getArea();
}

class Square implements Shape {
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

class Circle implements Shape {
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
    echo $s->getArea();
    $c = new Circle(5);
    echo $c->getArea();
}