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
}