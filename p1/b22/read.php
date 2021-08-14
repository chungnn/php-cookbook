<?php
$myfile = fopen("data.txt", "r"); // mở file để đọc
// Output one line until end-of-file
$data = '';
while(!feof($myfile)) {          // khi chưa tới EOF
  $data .= fgets($myfile);       // đọc 1 dòng và lưu vào biến
}
fclose($myfile);                 // đóng file

var_dump($data);
