<?php
class Rectangle {
    
    protected $width;
    protected $height;
    
    public function __construct($w, $h) {
        $this->width = $w;
        $this->height = $h;
    }
    
    public function area() {
        return $this->width * $this->height;
    }
    
}

$recA = new Rectangle(4, 3);
var_dump($recA->area());

$recB = new Rectangle(30, 5);
var_dump($recB->area());