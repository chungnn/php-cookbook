<?php 

class StudentModel {

    protected $name;
    protected $subjects;

    public function __construct($name, $subjects) {
        $this->name = $name;
        $this->subjects = $subjects;
    }

    public function save() {
        file_put_contents('students.txt', $this->name . '|' . implode(",", $this->subjects) . "\n", FILE_APPEND);
    }

}
