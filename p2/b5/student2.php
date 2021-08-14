<?php 

class Student {
    private $name;
    private $grade;
    
    public function getName() {
        return $this->name;
    }
    
    public function getGrade() {
        return $this->grade;
    }
    
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    
    public function setGrade($grade){
        $this->grade = $grade;
        return $this;
    }
    
    
}

$st = new Student();
$st->setGrade("A")->setName("ChungNN");

echo "<pre>";
var_dump($st->getName());
var_dump($st->getGrade());
echo "</pre>";