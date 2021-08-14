<?php 

function get_employees() {
    $employees = [];
    if (($handle = fopen("data.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 4096, ",")) !== FALSE) {
            $employees[] = $data;
        }
        fclose($handle);
    }
    return $employees;
}