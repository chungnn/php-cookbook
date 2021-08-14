<?php
require_once DOC_ROOT . DS . 'rectangle.php';

class Square extends Rectangle {
    
    public function __construct($edge) {
        $this->width = $edge;
        $this->height = $edge;
    }
    
}