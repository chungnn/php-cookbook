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
    
    public function perimeter() {
        return ($this->width + $this->height) * 2;
    }
    
}