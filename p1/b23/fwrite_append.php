<?php
$fp = fopen('data.txt', 'a'); // mở file để ghi, chú ý tham số thứ 2 phải là a
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);

echo "<pre>";
var_dump(file_get_contents('data.txt'));