<?php

class StudentController {
    
    public function index() {
        require_once APP_DIR . DS . 'models' . DS . 'student.php';
        $students = StudentModel::list();
        $flashMsg = $_SESSION['flash_message'] ?? '';
        unset($_SESSION['flash_message']);
        require_once APP_DIR . DS . 'views' . DS . 'students' . DS . 'index.php';
    }
    
    public function add() {
        $errors = $_SESSION['flash_errors'] ?? [];
        unset($_SESSION['flash_errors']);
        require_once APP_DIR . DS . 'helpers' . DS . 'util.php';
        require_once APP_DIR . DS . 'views' . DS . 'students' . DS . 'add.php';
    }

    public function save() {
        require_once APP_DIR . DS . 'models' . DS . 'student.php';
        require_once APP_DIR . DS . 'helpers' . DS . 'util.php';
        
        $data = [
            'name' => $_POST["name"] ?? '',
            'subjects' => $_POST["subjects"] ?? [],
        ];
        $errors = do_validation($data);
        if($errors['err_name'] == '' && $errors['err_subjects']== '') {
            $student = new StudentModel($_POST["name"], $_POST["subjects"]);
            $student->save();
            $_SESSION['flash_message'] = "Thực hiện đăng ký thành công";
            header("Location: index.php");
        } else {
            $_SESSION['flash_errors'] = $errors;
            header("Location: index.php?a=register");
        }        
    }
    
}