<?php

function get_students() {
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
        $students[] = [
            'name' => $name_and_subjects[0],
            'subjects' => $name_and_subjects[1]
        ];
    }
    return $students;
}

function add_student($name, $subjects) {
    file_put_contents('students.txt', $name . '|' . implode(",", $subjects) . "\n", FILE_APPEND);
}
