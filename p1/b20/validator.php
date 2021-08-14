<?php 
function validate($a, $b, $c) {
    $errors = [
        "a" => '',
        "b" => '',
        "c" => '',
    ];
    if($a == '') {
        $errors['a'] = "Cần nhập số a";
    }
    if($b == '') {
        $errors['b'] = "Cần nhập số b";
    }
    if($c == '') {
        $errors['c'] = "Cần nhập số c";
    }
    return $errors;
}