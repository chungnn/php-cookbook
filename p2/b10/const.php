<?php
class Employee {
    
    const IS_WORKING = 1;
    const IS_LEFT = 2;
    const IS_FIRED = 3;
    
    protected $name;
    protected $status;
    
    public function __construct($name, $status = self::IS_WORKING) {
        $this->name = $name;
        $this->status = $status;
    }
    
    public function fired() {
        $this->status = self::IS_FIRED;
    }
}

$emp = new Employee("Chung");

echo "<pre>";
var_dump(Employee::IS_WORKING);
echo "<br />";
var_dump(Employee::IS_LEFT);
echo "<br />";
var_dump(Employee::IS_FIRED);
echo "<br />";
var_dump($emp);
$emp->fired();
echo "<br />After fired: ";
var_dump($emp);

