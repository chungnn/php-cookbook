<?php

class StudentController {
    
    public function index() {
        require_once APP_DIR . DS . 'views' . DS . 'students' . DS . 'index.php';
    }
    
    public function add() {
        require_once APP_DIR . DS . 'views' . DS . 'students' . DS . 'add.php';
    }
    
}