<?php

class ClassTest {
    
    public function test_pass_value($x) {
        $x = 10;
    }
    
    public function test_pass_reference(&$x) {
        $x = 10;
    }
    
    public function test_pass_object($obj) {
        $obj->x = 33;
    }
    
}

$test = new ClassTest();
$x = 1;
echo "<pre>";
$test->test_pass_value($x);
echo "x after call test_pass_value: $x <br />";

$test->test_pass_reference($x);
echo "x after call test_pass_reference: $x <br />";

$ob = new stdClass();
$ob->x = 999;
$test->test_pass_object($ob);
echo "ob after call test_pass_object: ";
var_dump($ob);

$ob_2 = $ob;
$ob_2->x = 222;
echo "ob after change ob_2: ";
var_dump($ob);