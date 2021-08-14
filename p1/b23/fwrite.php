<?php
$fp = fopen('data.txt', 'w'); // mở file để ghi, chú ý tham số thứ 2 phải là w
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);

echo "<pre>";
var_dump(file_get_contents('data.txt'));