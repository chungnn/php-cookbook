<?php 
$obj = new stdClass();
$obj2 = $obj;
$obj->name = "Chung";
$obj->age = 30;

echo "<pre>";
var_dump($obj2);
var_dump((array) $obj2);

var_dump((object)["x" => 1, "y" => 2]);
