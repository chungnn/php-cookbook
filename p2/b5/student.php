<?php 

class Student {
    private $name;
    private $grade;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getGrade() {
        return $this->grade;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function setGrade($grade){
        $this->grade = $grade;
    }
    
    
}

$st = new Student("Chung");

echo "<pre>";
var_dump($st->getName());
var_dump($st->getGrade());
$st->setGrade("A");
var_dump($st->getGrade());
echo "</pre>";