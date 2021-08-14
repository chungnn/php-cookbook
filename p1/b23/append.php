<?php
$file = 'people.txt';
$data = " \n Where are you going?";  // \n là dấu xuống dòng 
file_put_contents($file, $data, FILE_APPEND);

echo "<pre>";
var_dump(file_get_contents($file));