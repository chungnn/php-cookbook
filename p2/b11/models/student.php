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

    public static function list() {
        $content = file_get_contents('students.txt');
        if($content == '') {
            return [];
        }
        $rows = explode("\n", $content);
        $students = [];
        foreach($rows as $row) {
            if(!$row) {
                break;
            }
            $name_and_subjects = explode("|", $row);
            $students[] = new StudentModel($name_and_subjects[0], $name_and_subjects[1]);
        }
        return $students;
    }

    public function getName() {
        return $this->name;
    }

    public function getSubjects() {
        return $this->subjects;
    }

}
