<?php
function validate_name($name) {
    if($name == "") {
        return "Tên không được để trống";
    }
    return null;
}

function validate_subjects($subjects) {
    if(count($subjects) == 0) {
        return "Cần chọn ít nhất 1 môn";
    }
    return null;
}

function do_validation($data) {
    return [
        'err_name' => validate_name($data['name']),
        'err_subjects' => validate_subjects($data['subjects'])
    ];
}

function show_message($msg) {
    if($msg == '') {
        return '';
    }
    return '<br /><i style="color:red;">'.$msg.'</i>';
}