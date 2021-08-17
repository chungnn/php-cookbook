<?php

class StudentController {
    
    public function index() {
        require_once APP_DIR . DS . 'models' . DS . 'student.php';
        $students = StudentModel::list();
        require_once APP_DIR . DS . 'views' . DS . 'students' . DS . 'index.php';
    }
    
    public function add() {
        require_once APP_DIR . DS . 'views' . DS . 'students' . DS . 'add.php';
    }

    public function save() {
        require_once APP_DIR . DS . 'models' . DS . 'student.php';
        $student = new StudentModel($_POST["name"], $_POST["subjects"]);
        $student->save();
        header("Location: index.php");
    }
    
}